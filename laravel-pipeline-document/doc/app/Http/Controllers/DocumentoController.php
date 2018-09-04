<?php

namespace App\Http\Controllers;

use App\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DocumentoController extends Controller
{
    public function documentosPorProyecto($proyectoId)
    {         
        $respuesta = new \stdClass();
        $documentos = Documento::where('proyectoId', $proyectoId)->get();  
        $respuesta->mensaje = 'OK';    
        $respuesta->id = $proyectoId;
        $respuesta->data = $documentos;
        return response()->json($documentos);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $documento = Documento::where('uuid', $id)->first();
        return view('documento.detail')->with('documento', $documento);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function loadDocumento(){
        $path = $request->file('documento')->store('documentos');
        dd($path);
        // validate the uploaded file
        $validation = $request->validate([
            'photo' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
            // for multiple file uploads
            // 'photo.*' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);
        $file      = $validation['photo']; // get the validated file
        $extension = $file->getClientOriginalExtension();
        $filename  = 'profile-photo-' . time() . '.' . $extension;
        $path      = $file->storeAs('photos', $filename);
    }
}
