<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class BackController extends Controller
{
    //maisons
    public function maisons()
    {

    }

    public function editMaison(Request $request, int $id)
    {

    }

    public function deleteMaison(int $id)
    {

    }

    //contacts
    public function contact()
    {
        $title = 'BAQIATH OFFICE CONTACT';
        $titre = 'Liste des messages d\'utilisateurs';
        $contacts = Contact::get();
        return \view('admin.index', compact('title','titre', 'contacts'));
    }

    public function deleteContact(int $id)
    {
      $contact = Contact::findOrFail($id) ;
      $contact->delete() ;
      return redirect()->back()->with('success','Suppression du message effectuée avec succès') ;
    }

    public function contactShow(int $id)
    {
      $contact = Contact::findOrFail($id) ;
      $title = $contact->nomination.' DETAILS.' ;
      return view('admin.show',compact('title','contact')) ;
    }
}
