<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;


use App\Models\Advertisement;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use App\Jobs\GoolgeVisionSafeSerch;
use App\Jobs\GoogleVisionLabelImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAdvertisement extends Component {
    use WithFileUploads;

    #[Rule("required|min:5|max:30")]
    public $title;

    #[Rule("required")]
    public $price;

    #[Rule("required|min:10|max:1500")]
    public $body;

    #[Rule("required")]
    public $category;

    #[Rule("required|max:1024")]
    public $temporary_images;

    #[Rule("required|max:1024")]
    public $images = [];

    public $advertisement;

    public function store() {
        $this->validate();


        $category = Category::find($this->category);

        $this->advertisement = $category->advertisements()->create([
            "title"=> $this->title,
            "price"=> $this->price,
            "body"=> $this->body,
            'user_id' => Auth::user()->id
        ]);
        $this->advertisement->user()->associate(Auth::user());


        if(count($this->images)) {
            foreach($this->images as $image) {
                /* $this->advertisement->images()->create(['path' => $image->store('images', 'public')]) */;
                $newFileName ="advertisements/{$this->advertisement->id}";
                $newImage = $this->advertisement->images()->create(["path"=> $image->store("$newFileName","public")]);
                
                RemoveFaces::withChain([
                new ResizeImage($newImage->path , 300 , 200),
                new GoolgeVisionSafeSerch($newImage->id), // ho scritto male la classe doveva essere GoogleVisionSafeSearch
                new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
            }
            File::deleteDirectory(storage_path("/app/livewire-tmp"));
        }
        session()->flash('messageImg', 'Articolo inserito con successo sara pubblicato dopo la revisione');
        $this->reset();




    }



    protected $rules = [
        "images.*" => "image|max:1024",
        "temporary_images.*" => "image|max:1024",
        "title" => "required|min:5|max:30",
        "price" => "required",
        "category" => "required",
        'body' => 'required|min:10|max:1500',
    ];
    protected $messages = [
        'required' => 'Campo richiesto',
        'min' => "Il campo deve essere :min caratteri",
        'max' => "Il campo deve essere :max caratteri",
        "temporary_images.required" => "L'immagine e richiesta",
        "temporary_images.*.images" => "I file devono essere immagini",
        "temporary_images.*.max" => "L'immagine deve essere massimo di 1mb",
        'images.image' => "Il immagine deve essere un imagine",
        'images.max' => "L'immagine deve essere massimo di 1mb",
    ];
    public function updatedTemporaryImages() {
        if($this->validate([
            'temporary_images.*' => "image|max:1024",
        ])
        ) {
            foreach($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }

    }
    public function removeImage($key) {
        if(in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }




    public function render() {


        return view('livewire.create-advertisement');
    }
}
