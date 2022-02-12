<?php

namespace App\Http\Controllers;

use App\Variante;
use Illuminate\Http\Request;


class VariantesCovidController extends Controller
{
    public function index() {
        $variantes = Variante::all();
        $argumentos = array();
        $argumentos ['variantes'] = $variantes;

        return view('variantes.index', $argumentos);
    }

    public function create() {
        return view('variantes.create');
    }

    public function store(Request $request) {
        $nuevavarienate = new Variante();
        $nuevavarienate->lineage = $request->input('lineage');
        $nuevavarienate->common_countries = $request->input('common_countries');
        $nuevavarienate->earliest_date = $request->input('earliest_date');
        $nuevavarienate->designated_number = $request->input('designated_number');
        $nuevavarienate->assigned_number = $request->input('assigned_number');
        $nuevavarienate->description = $request->input('description');
        $nuevavarienate->who_name = $request->input('who_name');

        if ($nuevavarienate->save()) {

            return redirect()->route('variantes.index')->
            with('exito', 'La nueva variane ha sido guardada');

        }

        return redirect()->route('variantes.index')->returnwith('error', "No se pudo añadir");

    }

    public function edit($id) {
        $variante = Variante::find($id);
        $argumentos = array();
        $argumentos['variante'] = $variante;

        if ($variante != NULL) {

            return view('variantes.edit', $argumentos);
        }
        return redirect()->route('variantes.index');
    }

    public function update(Request $request, $id) {

        $variante = Variante::find($id);

        if ($variante) {

        $variante->lineage = $request->input('lineage');
        $variante->common_countries = $request->input('common_countries');
        $variante->earliest_date = $request->input('earliest_date');
        $variante->designated_number = $request->input('designated_number');
        $variante->assigned_number = $request->input('assigned_number');
        $variante->description = $request->input('description');
        $variante->who_name = $request->input('who_name');

        if ($variante->save()) {
            return redirect()->
            route('variantes.edit', $id)->
            with('exito', 'Variant was update');
        }

        return redirect()->
            route('variantes.edit', $id)->
            with('error', 'Could not find variant');

        }

    }

    public function destroy($id) {
        $variante = Variante::find($id);
    
        if($variante->delete()) {
            return redirect()->
            route('variantes.index')-> 
            with('exito', 'Variant delete');
    
        }
        return redirect()->route('variantes.index')->
        with('error', 'Could not delete variant');
    }
    
}

