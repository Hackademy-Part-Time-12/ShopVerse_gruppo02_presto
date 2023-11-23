<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function home () {

        $annunci=Advertisement::take(6)->get()->sortbyDesc('created_at');
        

        return view('welcome',compact('annunci'));
    }
}
