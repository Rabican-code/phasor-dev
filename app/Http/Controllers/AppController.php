<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AppController extends Controller
{
    public function feedback(){
        return Inertia::render('Feedback');
    }
    public function postFeedback(Request $request){
        $feedback = new Feedback();
        $feedback-> feedback = $request->feedback;
        $feedback-> user_id = $request->user_id; 
       $feedback -> save();
    }
}
