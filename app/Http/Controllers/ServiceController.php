<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //Aquí podrías obtener los datos de tus servicios desde una base de datos o un array
    protected $services = 
    [
        [
            'slug' => 'diseno-grafico',
            'title' => 'Diseño Gráfrico Profecional',
            'description' => 'Creamos diseños impactantes para tu marca: logos, branding, folletos, etc.',
            'image' => 'ruta/a/tu/image-diseno.jpg', // Agrega ruta de imagen 
        ],
        [
            'slug' => 'Impresion-digital',
            'title' => 'Impresión Digital de Alta Calidad',
            'desccription' => 'Imprimimos tu diseño en diversos materiales con acabados profesionales.',
            'image' => 'ruta/a/tu/imagen-impresion.jpg',
        ],
        // AGREGA MAS SERVICIOS

    ];
    public function index()
    {
        return view('services.index', ['services' => $this->services]);
    }   

    public function show($slug)
    {
        $services = collect($this->services)->firstWhere('slug', $slug);

        if (!$service) {
            abort (404);
        }

        return view('services.show',['service' => $service]);
    }
}
