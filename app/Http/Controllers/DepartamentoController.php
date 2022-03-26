<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index(){

        $departamentos = ['Ingenierias' , 'Humanidades', 'Artes', 'Economicas'];
        $title = "Listado de departamentos";
        return view('Departamentos/index')->with( 'depto', $departamentos )
                               ->with( 'titulo', $title );
    }

    public function show($id){

        return view('Departamentos/show')->with('id', $id);
    }

    public function create(){
        return view('Departamentos/create');
    }

    public function edit($id){
        return view('Departamentos/edit')->with('id', $id);
    }

}
