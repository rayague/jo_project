<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\NotificationEtudiant;

class NotificationsController extends Controller
{



    public function storeFormations(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'contenu' => 'required|string',
            'link' => 'required|url',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation pour l'image
        ]);

            $notifications_etudiants = new NotificationEtudiant();
            $notifications_etudiants->title = $request->title;
            $notifications_etudiants->contenu = $request->contenu;
            $notifications_etudiants->link = $request->link;

            // Gestion du téléchargement de l'image
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->storePublicly('notifications_etudiants', 'public');
                $notifications_etudiants->image = $imagePath;
            }

            $notifications_etudiants->save();
            // dd($request->all());

            return redirect()->back()->with('success', 'Notification ajoutée avec succès.');
        }
}