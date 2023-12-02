<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Advertisement;

class PublicController extends Controller
{

    public function home () {

        $annunci = Advertisement::where('is_accepted', true)->take(6)->get()->sortbyDesc('created_at');


        return view('welcome',compact('annunci'));
    }
    public function categoryShow(Category $category) {

        return view('categoryShow',compact('category'));
    }

    public function searchAdvertisements (Request $request)
    {
        $advertisement = Advertisement::search($request->searched)->where('is_accepted', true)->paginate(10);


        return view('advertisement.index', compact('advertisement',));
    }
}
