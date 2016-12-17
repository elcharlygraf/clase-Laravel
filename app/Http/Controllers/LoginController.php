<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class LoginController extends Controller
{

    public function index()
    {
        //Vistas están en: resources:views
        return view('login');
    }

    public function login(Request $request)
    {
        //dd($request->all()); "Detiene e imprime" = var_dump() + exit();
        $email = $request['email'];
        $password = $request['password'];

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('welcome');
        } else {
            return "Error";
        }
    }

    public function registerUser(){
        //GUARDAR: $user = new User;
        /* ACTUALIZAR POR ID
        $user = User::find('1');
        $user->name  = "Jorge";
        $user->email = "jorge@jorge.com";
        $user->password = bcrypt('123456');
        $user->save();
        */

        /*
        ACTUALIZAR POR CUALQUIER COLUMNA
        User::where('name', 'Jorge')
            ->update(
                [
                    'name'  => 'Juan Carlos',
                    'email' => 'juan@juan.com'
                ]);
        */
    }

    public function welcome(){
        return "Bienvenido";
    }

    public function logout(){
        Auth::logout();
        return redirect()->back();
    }

    public function destroy($id){
        $user = User::find($id);
        if($user){
            echo "si existe";
            $user->delete();
        } else {
            echo "No existe";
        }
        //
    }
}
