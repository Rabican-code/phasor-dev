<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;

class RegisterController extends Controller
{
    function register (Request $request)
    {
        $user = new User;
        $user-> name = $request->name;
        $user-> lastName = $request->lastName;
        $user-> email = $request->email;
        $user-> password = Hash::make($request->password);
        $user-> location = $request->location;
        $user-> job = $request->job;
        $user-> jobType = $request->jobType;
        $user-> source = $request->source;
        $user-> save();
    }
    function payment ()
    {
        return Inertia::render('PaymentGateway');
    }
}
