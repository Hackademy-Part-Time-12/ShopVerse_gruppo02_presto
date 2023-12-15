<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Advertisement;

class PublicController extends Controller
{

    public function index(){
        $announcements = Advertisement::all();
        return view("profile.index",compact("announcements"));
    }

    public function home () {

        $annunci = Advertisement::where('is_accepted', true)->take(5)->get()->sortbyDesc('created_at');


        return view('welcome',compact('annunci'));
    }

    public function categoryShow(Category $category) {
        $advertisement = Advertisement::where('is_accepted', true)->paginate(5) ;
        $annunci =Category::paginate(5) ;



        return view('categoryShow',compact('category','advertisement','annunci'));
    }


    public function searchAdvertisements (Request $request)
    {
        $advertisement = Advertisement::search($request->searched)->where('is_accepted', true)->paginate(10);


        return view('advertisement.index', compact('advertisement'));
    }

    public function setLanguage($lang){

        session()->put('locale',$lang);
        return redirect()->back();

    }
}
