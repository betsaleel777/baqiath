<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Maison;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FrontController extends Controller
{
    public function index()
    {
        $maisons = Maison::get();
        return view('site', compact('maisons'));
    }

    public function mailus()
    {
        return view('mail.mailus');
    }

    public function send(Request $request)
    {
        $this->validate($request, Contact::RULES);
        Contact::create($request->all());
        if (App::isLocale('fr')) {
            $message = 'Message enregistrée avec succès';
        } elseif (App::isLocale('en')) {
            $message = 'Success message saving';
        } else {
            $message = 'Messaggio salvato con successo';
        }
        return redirect()->back()->with('success', $message);
    }

    public function languages($locale)
    {
        if (!in_array($locale, ['en', 'it', 'fr'])) {
            abort(404);
        }
        \Session::put('locale', $locale);
        return redirect()->back();
    }
}
