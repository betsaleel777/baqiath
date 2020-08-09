<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact ;

class FrontController extends Controller
{
    public function index(){
        return view('site');
    }

    public function mailus(){
        return view('mail.mailus') ;
    }

    public function send(Request $request){
      //verifier
      Contact::create($request->all());
      $message = 'Message enregistrée avec succès' ;
      return redirect()->route('mailus')->with('success',$message) ;
    }
}
