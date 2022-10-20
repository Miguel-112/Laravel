<?php

namespace App\Http\Controllers;

use App\Mail\ContactabisMailable;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    //

    public function index(){

        return view('contactanos.index');

    }

    public function store(Request $request){

        $request->validate([

            'nombre' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',

        ]);

        $correo = new ContactabisMailable($request->all());
        Mail::to('angelsardo1@gmail.com')->send($correo);
        return redirect()->route('contactanos.index');
    }
}
