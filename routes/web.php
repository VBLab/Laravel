<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// renvoie au fichier d'acceuil = welcome.blade.php ===> cf rep ressources/view
// Route::get('/', function () {
//     return view('welcome');
// });

// // création d'une route ciblée
// Route::get('test', function () {
//     return 'welcometest';
// });


///création d'une fonction reprenant plusieurs routes possibles. Nommées avec des chiffres (n).
// Attention ne retourne que du texte (une chaine de caractères), il ne pointe plus sur views.

// Route::get('{n}', function($n) {
//     return 'Je suis la page ' . $n . ' !';
// });

// Contraindre le paramètre à n'accépter que certaines valeurs.
// Route::get('{n}', function($n) {
//     return 'Je suis la page ' . $n . ' !';
// })->where('n', '[2-4]');

// il est pafois utile de nomer des routes...ex : pour nomer un URL ou pour affectuer une redirection
// Route::get('/', function() {
//     return 'Je suis la page d\'accueil !';
//   })->name('welcome');

//### IMPORTANT => connaitre l'ordre des routes => la règle est = LES ROUTES SONT ANALYSEES DANS LEUR ORDRE DANS LE FICHIER DE ROUTE. #####


// # renvoi d'un tableau ===> objet json
// Route::get('test', function () {
//     return ['un', 'deux', 'trois'];
// });

//# renvoie d'une vue # ==> vue1.php
// Route::get('/', function() {
//     return view('vue1');
// });

//# renvoie d'une vue de la page article avec un numéro choisi (tous les chiffres compris entre 0 et 9)
// Route::get('article/{n}', function($n) {
//     return view('article')->withNumero($n);
// })->where('n', '[0-9]+'); 

//# renvoie d'une vue de la page facture avec un numéro choisi (tous les chiffres compris entre 0 et 9)
// Route::get('facture/{n}', function($n) {
//     return view('facture')->withNumero($n);
// })->where('n', '[0-9]+');

// ## avec utilisation de controleur- pointe sur le fichier WelcomeController qui se trouve dans app/Http/Controllers, on fait la liaison avec @ ##
// Route::get('/', 'WelcomeController@index');
// On peut utiliser l méthode magique por nommer la route.
//  Route::get('/', 'WelcomeController@index')->name ('toto');

//  ## avec un nouveau controller (creé en ligne de cmd ...php artisan make:controller ArticleController)
// Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

// pour un fomulaire de contact
// Route::get('users', 'UsersController@create');
// Route::post('users', 'UsersController@store');

// Pour controler et valider les données reçues par le formulaire de contact.
// Route::get('contact', 'ContactController@create');
// Route::post('contact', 'ContactController@store');

// Pour formulaire envoie et reception photo
// Route::get('photo', 'PhotoController@create');
// Route::post('photo', 'PhotoController@store');

// Route pour intraction BDD
Route::get('contact', 'ContactsController@create')->name('contact.create');
Route::post('contact', 'ContactsController@store')->name('contact.store');