<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // si deseas enviar correo

class ContactController extends Controller
{
    public function index()
    {
            return view('contact');
    }
    
    public function submit(Request $request)
    {
        // Aqui puedes validar los datos del formulario
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        //Aqui puedes guardar los datos en la base de datos o enviar un correo electronico
        //Mail::to('tu_correo@ejemplo.com')->send(new\app\Mail\ContactFormSubmitted($request->all())),

        return redirect()->route('contact')->with('success', 'Gracias por tu mensaje! Te contactaremos muy pronto.');
    }
}

