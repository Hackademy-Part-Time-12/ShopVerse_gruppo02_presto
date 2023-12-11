<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;
use App\Models\Category;
use App\Models\Advertisement;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;


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
public $category_id;

#[Rule("required|max:1024")]
public $temporary_images;

#[Rule("required|max:1024")]
public $images = [];
public $old_image;

public $advertisement;
public $advertisements;

 public function mount(){
    $this->title = $this->advertisements->title;
    $this->price = $this->advertisements->price;
    $this->body = $this->advertisements->body;
    $this->category_id = $this->advertisements->category_id;
    


 }






    public function render()
    {
        $image =Image::all();
        $category = Category::all();
        $advertisement = Advertisement::all();
        return view('livewire.edit-advertisement', compact('category','image','advertisement'));
    }
}
