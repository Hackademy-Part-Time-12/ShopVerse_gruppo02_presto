<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\Advertisement;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class CreateAdvertisement extends Component
{
    #[Rule("required|min:5|max:30")]
    public $title;

    #[Rule("required")]
    public $price;

    #[Rule("required|min:10|max:1500")]
    public $body;

    #[Rule("required")]
    public $category;
    public function store(){
        $this->validate();
        

        $category= Category::find($this->category);
        $category->advertisements()->create([
            "title"=> $this->title,
            "price"=> $this->price,
            "body"=> $this->body,
            'user_id' => Auth::user()->id

        ]);
        session()->flash("PostCreate","Articolo aggiunto con successo");
        $this->reset();
    }
    protected $rules=[
        "title"=> "required|min:5|max:30",
        "price"=> "required",
        "category"=> "required",
        'body'=> 'required|min:10|max:1500',
    ];
    protected $messages=[
        'required'=> 'Campo richiesto',
        'min'=> "Il campo deve essere :min caratteri",
        'max'=> "Il campo deve essere :max caratteri"
    ];
    public function render()
    {


        return view('livewire.create-advertisement');
    }
}
