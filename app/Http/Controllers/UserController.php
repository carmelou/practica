<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function getUsers(){

        try {
            return response()->json([
                'success' => true,
                'message' => "Registros obtenidos exitosamente",
                'data' => '1',
                'color' => 'success',
                'users' => User::all()
            ]);
        }catch (\Exception $e){
            return response()->json([
                'success'       =>false,
                'message'       =>"Ocurrió un error: ". $e->getMessage(),
                'data'          =>$e->getCode(),
                'color'         =>'danger'
            ]);
        }

    }

    public function index(){

       // $users = ['Luis' , 'Elisa', 'Juana', 'Miguel'];

        $users = User::all();

        $title = "Listado de empleados";

        return view('Users.index', compact('users', 'title') );
    }

    public function show($id){

        $user= User::findOrFail($id);

        return view('Users/show', compact('user'));
    }

    public function create(){
        return view('Users/create');
    }

    public function edit($id){
        return view('Users/edit')->with('id', $id);
    }

    public function store(Request $request){

        $data = request();

        $user               =   new User();
        $user->name         =   $request->nombre_v;
        $user->email        =   $request->correo_v;
        $user->lastName     =   $request->apellido_v;
        $user->save();

        return redirect()->route('todos');


    }

    public function saludo($name, $nickname=null ){
        if($nickname != null){

             return view('saludo');
        }else{
            return "hola  $name  no tienes apodo ";
        }
    }
}
