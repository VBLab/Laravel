<?php
// la tâche dun controleur = réceptionner une requête (qui a déjà été sélectionnée par une route) et de définir la réponse appropriée.
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
