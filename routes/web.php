<?php

use App\Models\Avis;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $avis = Avis::all();
    return view('welcome', compact('avis'));
});


// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/conception', [ViewsController::class, 'conception'])->name('conception');
Route::get('/optimisation', [ViewsController::class, 'optimisation'])->name('optimisation');
Route::get('/referencement', [ViewsController::class, 'referencement'])->name('referencement');


Route::get('/contactez nous', [ViewsController::class, 'nousContacter'])->name('nousContacter');
Route::post('/contact', 'ContactController@sendEmail')->name('contact');

Route::get('/nos formations', [ViewsController::class, 'nosFormations'])->name('nosFormations');
Route::get('/demander un devis gratuitement', [ViewsController::class, 'devisGratuis'])->name('devisGratuis');


Route::get('/faqs', [ViewsController::class, 'faqs'])->name('faqs');
Route::get('/qui sommes-nous', [ViewsController::class, 'quiSommesNous'])->name('quiSommesNous');
Route::get('/supports', [ViewsController::class, 'supports'])->name('supports');
Route::get('/polique de confidentialité', [ViewsController::class, 'politiqueConfidentialite'])->name('politiqueConfidentialite');
Route::get('/temoignages', [ViewsController::class, 'temoignages'])->name('temoignages');
Route::get('/modèles de site web', [ViewsController::class, 'modeles'])->name('modeles');
Route::get('/commander un site web', [ViewsController::class, 'commandeSite'])->name('commandeSite');


Route::post('/ajouter une formation', [Controller::class, 'submit_formations'])->name('submit_formations');
Route::post('/Ajouter un avis', [Controller::class,'submit_avis'])->name('submit_avis');

Route::delete('/avis/{id}', [Controller::class,'avis_destroy'])->name('avis_destroy');



// Route::get('/redaction web/{id}', [ViewsController::class, 'pack1'])->name('pack1');
// Route::get('/E-commerce', [ViewsController::class, 'pack2'])->name('pack2');
// Route::get('/Art Oratoire', [ViewsController::class, 'pack3'])->name('pack3');
// Route::get('/Marketing Digital', [ViewsController::class, 'pack4'])->name('pack4');


Route::get('/redaction web', [ViewsController::class, 'pack1'])->name('pack1');
Route::get('/E-commerce', [ViewsController::class, 'pack2'])->name('pack2');
Route::get('/Art-Oratoire', [ViewsController::class, 'pack3'])->name('pack3');
Route::get('/Marketing Digital', [ViewsController::class, 'pack4'])->name('pack4');
Route::get('/Marketing', [ViewsController::class, 'pack5'])->name('pack5');
Route::get('/Digital', [ViewsController::class, 'pack6'])->name('pack6');


Route::get('/ajouter-un-pack', [ViewsController::class, 'addPack'])->name('addPack');
Route::get('/envoyer-une-notification', [ViewsController::class, 'sendNotifsClients'])->name('sendNotifsClients');
Route::get('/voir-les-notifications-clients', [ViewsController::class, 'seeNotifsClients'])->name('seeNotifsClients');
Route::get('/ajouter-une-formation', [ViewsController::class, 'addFormations'])->name('addFormations');
Route::get('/Envoyer-une-notification-etudiant', [ViewsController::class, 'sendNotifsEtudiants'])->name('sendNotifsEtudiants');
Route::get('/voir-notification-etudiants', [ViewsController::class, 'seeNotifsEtudiants'])->name('seeNotifsEtudiants');
// Route::get('/Digital', [ViewsController::class, 'sendNotifsRedacteurs'])->name('sendNotifsRedacteurs');
Route::get('/envoyer-une-notifiaction-redacteur', [ViewsController::class, 'sendNotifsRedacteurs'])->name('sendNotifsRedacteurs');
Route::get('/voir-les-realisations', [ViewsController::class, 'seeRealisations'])->name('seeRealisations');
Route::get('/voir-notification-redacteurs', [ViewsController::class, 'seeNotifsRedacteurs'])->name('seeNotifsRedacteurs');


Route::post('/envoyer-une-notification-admin', [Controller::class, 'sendNotificationsAdmin'])->name('sendNotificationsAdmin');
Route::delete('/rendezvouses/{id}', [Controller::class,'deleteSendNotificationsAdmin'])->name('deleteSendNotificationsAdmin');
// Route::get('/deleteSendNotificationsAdmin/{id}', [Controller::class,'deleteSendNotificationsAdmin'])->name('deleteSendNotificationsAdmin');



// Route::get('/administration', [AdminController::class, 'create'])->name('adminDashboard');
// Route::post('/administration', [AdminController::class, 'store']);



Route::get('/dashboard client', [ViewsController::class, 'client'])->name('client');
Route::get('/dashboard etudiant', [ViewsController::class, 'etudiant'])->name('etudiant');
Route::get('/dashboard redacteur', [ViewsController::class, 'redacteur'])->name('redacteur');





Route::get('/dashboard', function () {

    $avis = Avis::all();
    return view('dashboard', compact('avis'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';