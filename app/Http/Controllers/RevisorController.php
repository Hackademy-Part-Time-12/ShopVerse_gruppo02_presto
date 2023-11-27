<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;

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
}
