<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Advertisement;

class PublicController extends Controller
{

    public function home () {

        $annunci=Advertisement::take(6)->get()->sortbyDesc('created_at');


        return view('welcome',compact('annunci'));
    }
    public function categoryShow(Category $category) {

        return view('categoryShow',compact('category'));
    }
}
