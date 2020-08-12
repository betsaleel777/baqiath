<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App ;
use App\Contact ;


class FrontController extends Controller
{
    public function index(){
        return view('site');
    }

    public function mailus(){
        return view('mail.mailus') ;
    }

    public function send(Request $request)
    {
      //verifier
      Contact::create($request->all());
      $message = 'Message enregistrée avec succès' ;
      return redirect()->route('mailus')->with('success',$message) ;
    }

    public function languages($locale)
    {
      if (! in_array($locale, ['en', 'it', 'fr'])) {
        abort(404);
      }
      \Session::put('locale', $locale);
      return redirect()->back();
    }
}
