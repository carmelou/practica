<?php

namespace App\Http\Controllers;
use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index(){

        $departamentos = Departamento::all();

        $title = "Listado de departamentos";
        return view('Departamentos.index', compact('departamentos', 'title') );
    }

    public function show($id){

        $departamento= Departamento::findOrFail($id);

        return view('Departamentos/show', compact('departamento'));
    }

    public function create(){
        return view('Departamentos/create');
    }

    public function edit($id){
        return view('Departamentos/edit')->with('id', $id);
    }
    public function store(Request $request){

        $data = request()->validate([
            'name_v'      => 'required|min:5']);

        $departamento               =   new Departamento();
        $departamento->name         =   $request->name_v;
        $departamento->save();

        return redirect()->route('todosd');
    }


}
