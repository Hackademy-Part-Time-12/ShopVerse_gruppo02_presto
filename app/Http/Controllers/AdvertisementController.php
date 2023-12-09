<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function __construct(){
        $this->middleware("auth")->except("index","show");

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $advertisement = Advertisement::where('is_accepted', true)->paginate(6); //
         return view("advertisement.index", compact("advertisement"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view("advertisement.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //creata nel componente Livewire
    }

    /**
     * Display the specified resource.
     */
    public function show(Advertisement $advertisement)
    {
       return view("advertisement.show", compact("advertisement"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advertisement $advertisement)
    {
        $advertisement = $advertisement::all();
        return view("advertisement.edit", compact("advertisement"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advertisement $advertisement)
    {
        //
    }
}
