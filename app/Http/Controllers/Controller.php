<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\User;
use App\Models\Formation;
use App\Models\rendezvous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function submit_formations(Request $request)
    {
        $request->validate([
            'formations_title' => ['required', 'string'],
            'formations_comments' => ['required', 'string'],
        ]);

        $formations = new Formation;

        $formations->formations_title = request('formations_title');
        $formations->formations_comments = request('formations_comments');
        $formations->save();


        return redirect()->back();
    }

    public function submit_avis(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'avis_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'commentaires' => 'required|string|max:255',
        ]);

        $avis = new Avis;
        $avis->nom = $request['nom'];
        $avis->prenom = $request['prenom'];
        // $imagePath = $request->file('avis_photo')->move('photos'); // Correction ici
        // $avis->avis_photo = $imagePath;
        if ($request->hasfile('avis_photo'))
        {
            $file = $request->file('avis_photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move("uploads/photos/", $filename);
            $avis->avis_photo = $filename;
        }
    // Limiter le nombre de caractères du commentaire à 255
    $commentaires = substr($request->input('commentaires'), 0, 255);
    $avis->commentaires = $commentaires;

    // Assurez-vous que $commentaires est une chaîne avant de l'assigner à $avis->commentaires
    if (is_string($commentaires)) {
        $avis->save();
        return redirect()->back()->with('success', 'Votre avis a été enregistré avec succès!');
    } else {
        // Gérer l'erreur si $commentaires n'est pas une chaîne
        // Cela peut arriver si le commentaire initial est déjà inférieur à 255 caractères
        return redirect()->back()->with('error', 'Une erreur s\'est produite lors de l\'enregistrement de votre avis.');
    }
}

public function avis_destroy($id)
{
    $avis = Avis::findOrFail($id);
    $avis->delete();

    return redirect()->back()->with('success', 'L\'avis a été supprimé avec succès.');
}


public function sendNotificationsAdmin(Request $request)
{
    // Validation des données
    $validatedData = $request->validate([
        'rdv_date' => 'required|date',
        'rdv_hour' => 'required|string',
        'rdv_description' => 'required|string',
        'pack' => 'required|string',
    ]);
    $user = Auth::user();
    $userName = $user->name;

    // Création d'un nouveau rendez-vous
    rendezvous::create([
        'user_name' => $userName,
        'rdv_date' => $validatedData['rdv_date'],
        'rdv_hour' => $validatedData['rdv_hour'],
        'rdv_description' => $validatedData['rdv_description'],
        'pack' => $validatedData['pack'],
    ]);

    // Vous pouvez également effectuer d'autres actions ici, comme l'envoi de notifications, etc.

    // Redirection ou réponse appropriée après avoir ajouté le rendez-vous
    return redirect()->back()->with(['message' => 'Rendez-vous envoyé avec succès.']);
}

public function deleteSendNotificationsAdmin($id)
{
    $rdvs = rendezvous::findOrFail($id);
    $rdvs->delete();

    return redirect()->back()->with('delete', 'Votre rendez-vous a été supprimé.');
}

}