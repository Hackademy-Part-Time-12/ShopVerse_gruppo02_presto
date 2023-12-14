<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Advertisement;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use App\Jobs\GoolgeVisionSafeSerch;
use App\Jobs\GoogleVisionLabelImage;
use Illuminate\Support\Facades\File;


class EditAdvertisement extends Component
{
    use WithFileUploads;

    #[Rule("required|min:5|max:30")]
    public $title;

    #[Rule("required")]
    public $price;

    #[Rule("required|min:10|max:1500")]
    public $body;

    #[Rule("required")]
    public $category;
    public $is_accepted;



    #[Rule("required|max:1024")]
    public $temporary_images;

    #[Rule("required|max:1024")]
    public $images = [];
    public $old_image;

    public $advertisement;
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


    public function mount(Advertisement $advertisement)
    {

        $this->advertisement = $advertisement;

        $this->title = $this->advertisement->title;
        $this->price = $this->advertisement->price;
        $this->body = $this->advertisement->body;
        $this->category = $this->advertisement->category->id;
        $this->old_image = $this->advertisement->images()->get();
        $this->is_accepted = $this->advertisement->is_accepted;



    }

    public function updatedTemporaryImages()
    {
        if (
            $this->validate([
                'temporary_images.*' => "image|max:1024",
            ])
        ) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }

    }

    public function update()
    {



        $this->advertisement->update([

            "title"=>$this->title,
           "price"=>$this->price,
            "body"=>$this->body,
            "category_id"=>$this->category,
            "is_accepted"=>null,

        ]);

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

                dispatch(new ResizeImage($newImage->path , 300 , 200));



            }
            $this->old_image = $this->advertisement->images()->get();

            $this->images =[];



        }
        session()->flash('messageEdit', 'Articolo modificato con successo sara pubblicato dopo la revisione');
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }
    public function removeImageOld($key)
    {
        if ($this->old_image->has($key)) {
            $this->old_image->get($key)->delete();
           $this->old_image->forget($key);
        }
    }

    public function render()
    {
        return view('livewire.edit-advertisement');
    }



}
