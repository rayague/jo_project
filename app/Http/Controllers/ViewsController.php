<?php

namespace App\Http\Controllers;

use App\Models\rendezvous;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function conception()
    {
        return view ('categories.conception');
    }

    public function optimisation()
    {
        return view ('categories.optimisation');
    }

    public function referencement()
    {
        return view ('categories.referencement');
    }

    public function nousContacter()
    {
        return view ('fronts.nousContacter');
    }


    public function devisGratuis()
    {
        return view ('fronts.devisGratuis');
    }


    public function quiSommesNous()
    {
        return view ('fronts.quiSommesNous');
    }

    public function supports()
    {
        return view ('fronts.supports');
    }

    public function politiqueConfidentialite()
    {
        return view ('fronts.politiqueConfidentialite');
    }

    public function faqs()
    {
        return view ('fronts.faqs');
    }

    public function temoignages()
    {
        return view ('fronts.temoignages');
    }

    public function nosFormations()
    {
        return view ('fronts.nosFormations');
    }

    public function modeles()
    {
        return view ('fronts.modeles');
    }

    public function commandeSite()
    {
        return view ('fronts.commandeSiteWeb');
    }

    public function administration()
    {
        return view ('adminDashboard');
    }


    public function client()
    {
        // $rdv = rendezvous::findOrFail($id);

        return view ('menu.client');
    }

    public function redacteur()
    {
        return view ('menu.redacteur');
    }

    public function etudiant()
    {
        return view ('menu.etudiant');
    }

    // public function marketingDigital()
    // {
    //     return view ('menu.etudiant');
    // }

    // public function artOratoire()
    // {
    //     return view ('menu.etudiant');
    // }

    // public function eCommerce()
    // {
    //     return view ('menu.etudiant');
    // }

    // public function redactionWeb()
    // {
    //     return view ('menu.etudiant');
    // }

    public function pack1()
    {
        // Récupérer tous les rendez-vous
        $rdvs = rendezvous::all();

        // Passer les rendez-vous à la vue
        return view('afterdashboard.pack1', compact('rdvs'));
    }




    public function addPack()
    {
        return view ('dashboards.addPack');
    }

    public function sendNotifsClients()
    {
        return view ('dashboards.sendNotifsClients');
    }

    public function sendNotifsEtudiants()
    {
        return view ('dashboards.sendNotifsEtudiants');
    }

    public function sendNotifsRedacteurs()
    {
        return view ('dashboards.sendNotifsRedacteurs');
    }

    public function seeNotifsClients()
    {
        return view ('dashboards.seeNotifsClients');
    }

    public function seeNotifsEtudiants()
    {
        return view ('dashboards.seeNotifsEtudiants');
    }

    public function seeNotifsRedacteurs()
    {
        return view ('dashboards.seeNotifsRedacteurs');
    }

    public function addFormations()
    {
        return view ('dashboards.addFormations');
    }

    public function seeRealisations()
    {
        return view ('dashboards.seeRealisations');
    }

}