<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = ['Luis' , 'Elisa', 'Juana', 'Miguel'];
        $title = "Listado de empleados";
        return view('Users/index')->with( 'users', $users )
                               ->with( 'titulo', $title );
    }

    public function show($id){

        return view('Users/show')->with('id', $id);
    }

    public function create(){
        return view('Users/create');
    }

    public function edit($id){
        return view('Users/edit')->with('id', $id);
    }



    public function saludo($name, $nickname=null ){
        if($nickname != null){

             return view('saludo');
        }else{
            return "hola  $name  no tienes apodo ";
        }
    }
}
