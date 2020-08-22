<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Maison;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BackController extends Controller
{
    //maisons
    public function maisons()
    {
        $title = 'BAQIATH OFFICE MAISONS';
        $titre = 'Maisons du site';
        $maisons = Maison::get();
        return view('admin.maisons.index', compact('titre', 'title', 'maisons'));
    }

    public function editMaison(int $rang)
    {
        $title = 'MODIFIER MAISON ' . $rang;
        $rank = $rang;
        $maison = Maison::where('rang', $rang)->get()->first();
        return view('admin.maisons.edit', compact('maison', 'title', 'rank'));
    }

    public function add(int $rang)
    {
        $rank = $rang;
        $title = 'AJOUTER MAISON';
        return view('admin.maisons.add', compact('title', 'rank'));
    }

    public function store(Request $request)
    {
        if ($request->rang === 1 or $request->rang === 2) {
            $data = $request->validate(Maison::RULES_FIRST);
        } else {
            $data = $request->validate(Maison::RULES_SECOND);
        }
        $maison = new Maisons($request->all());
        $imageName = time() . '.' . $request->image_presentation->getClientOriginalExtension();
        $request->image_presentation->move(public_path('web/images'), $imageName);
        $maison->image_presentation = $imageName;
        $maison->save();
        return redirect()->route('maisons')->with('success', 'Informations de maison enregistrées avec succes');
    }

    public function updateMaison(Request $request, int $rang)
    {
        if ($request->rang === 1 or $request->rang === 2) {
            $data = $request->validate(Maison::RULES_FIRST);
        } else {
            $data = $request->validate(Maison::RULES_SECOND);
        }
        $maison = Maison::findOrFail($rang);
        $maison->intitule = $request->intitule;
        $maison->lieu = $request->lieu;
        $maison->chambre = $request->chambre;
        $maison->salon = $request->salon;
        $maison->superficie = $request->superficie;
        if (!empty($request->image_presentation)) {
            $oldpath = public_path('web/images') . '/' . $maison->getOriginal('image_presentation');
            File::delete($oldpath);
            $imageName = time() . '.' . $request->image_presentation->getClientOriginalExtension();
            $request->image_presentation->move(public_path('web/images'), $imageName);
            $maison->image_presentation = $imageName;
        }
        $maison->save();
        return redirect()->route('maisons')->with('success', 'Informations de maison modifiées avec succes');
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
        return \view('admin.index', compact('title', 'titre', 'contacts'));
    }

    public function deleteContact(int $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->back()->with('success', 'Suppression du message effectuée avec succès');
    }

    public function contactShow(int $id)
    {
        $contact = Contact::findOrFail($id);
        $title = $contact->nomination . ' DETAILS.';
        return view('admin.show', compact('title', 'contact'));
    }
}
