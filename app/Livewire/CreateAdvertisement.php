<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\Advertisement;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class CreateAdvertisement extends Component
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

    #[Rule("required|max:1024")]
    public $temporary_images;

    #[Rule("required|max:1024")]
    public $images = [];

     public function store(){
        $this->validate();


        $category= Category::find($this->category);

        $this->advertisement =$category->advertisements()->create($this->validate());
        $this->advertisement->user()->associate(Auth::user());
        $this->advertisement->save();

        if (count($this->images)) {
            foreach ($this->images as $image) {
                $this->advertisement->images()->create(['path' => $image->store('images', 'public')]);
            }
        }
        session()->flash('messageImg', 'Articolo inserito con successo sara pubblicato dopo la revisione');
        $this->reset();


      /*   session()->flash("PostCreate","Articolo aggiunto con successo");
        $this->reset(); //funzione per resettare i campi del form*/
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
    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }




    public function render()
    {


        return view('livewire.create-advertisement');
    }
}
