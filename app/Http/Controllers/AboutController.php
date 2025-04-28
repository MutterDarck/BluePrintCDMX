<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
            $experience = "Aqui puedes Hablar sobre tu trayectoria, experiencia en artes graficas, tu pasion por el diseño, Etc.";
            return view('about', ['experience' => $experience]);
    }
    //
}
