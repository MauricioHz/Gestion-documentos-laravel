<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;
use App\Http\Requests\ProyectoRequestRule;

class ProyectoController extends Controller
{

    public function index()
    {
        $proyectos = Proyecto::orderBy('id', 'DESC')->get();
        return view('proyecto.index')->with('proyectos', $proyectos);
    }

    public function create()
    {
        return view('proyecto.create');
    }

    public function store(Request $request)
    {
        //$validated = $request->validated();

        $existeProyecto = Proyecto::where('nombre', '=', trim($request->nombre))->first();
        if ($existeProyecto === null) {
            $proyecto = new Proyecto();
            $proyecto->uuid = uniqid();
            $proyecto->nombre = $request->nombre;
            $proyecto->descripcion = $request->descripcion;
            $proyecto->grupoId = '0';
            $proyecto->usuarioId = '0';
            $proyecto->fechaInicio = $request->fechaInicio;
            $proyecto->fechaVencimiento = $request->fechaVencimiento;
            $proyecto->vigente = '1';
            $proyecto->fechaSistema = date('Y-m-d');
            $proyecto->save();
        }
        return redirect('proyectos');
    }

    public function show(Proyecto $proyecto)
    {
        return view('proyecto.show');
    }

    public function edit(Proyecto $proyecto)
    {
        return view('proyecto.edit');
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        return view('proyecto.index');
    }

    public function destroy(Proyecto $proyecto)
    {
        return view('proyecto.index');
    }
}