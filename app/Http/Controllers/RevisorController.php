<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{

    public function indexRevisor(){
        $announcement_to_check = Advertisement::where('is_accepted', null)->first();
        return view ('revisor.index', compact('announcement_to_check'));
    }

    public function acceptAnnouncement (Advertisement $advertisement){
        $advertisement->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti, hai accettato l\'annuncio');
    }

    public function rejectAnnouncement (Advertisement $advertisement){
        $advertisement->setAccepted(false);
        return redirect()->back()->with('message', 'Complimenti, hai rifiutato l\'annuncio');
    }

    public function becomeRevisor(){
        Mail::to('admim@shopverse.it')->send(new BecomeRevisor(Auth::user()));

        return redirect()->back()->with('message', 'Complimenti hai richiesto di diventare revisore correttamente');
    }

    public function makeRevisor(User $user){
        Artisan::call('app:MakeUserRevisor',  ["email"=>$user->email]);
        return redirect('/')->with('accepted', "Complimenti $user->name è diventato revisore");
    }


}
