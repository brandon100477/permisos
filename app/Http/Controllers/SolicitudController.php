<?php

namespace App\Http\Controllers;

use App\Models\{permisos, personas, empresa};
use Illuminate\Support\Facades\{Auth, hash};

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function login(Request $request)
    //login validación y autenticación usuarios
    {

            return view('login');
        }

    public function login_inicio(Request $request){
                 $usuario = personas::where('correo', $request->email)->first();
        if (!$usuario) {
            // El usuario no existe, muestra un mensaje de error
            return back()->withErrors(['email' => 'El correo no existe']);
        }
        if (Hash::check($request->password, $usuario->password)) {
            // Obtener el token de acceso del usuario
            $token = auth()->login($usuario);
            // Almacenar el token de acceso en la sesión del usuario
            $request->session()->put('accessToken', $token);
            $request->session()->regenerate();
            //Sentencia para saber si es administrador o medico y llevarlos a la vista correspondiente.
            return view('empleado');
        }else{
            // Validar errores
            $errores = [];
            if (!$usuario) {
                $errores['usuario'] = 'El correo no existe';
            }else if (!Hash::check($request->password, $usuario->password)) {
                $errores['password'] = 'La contraseña es incorrecta';
            }
            // Mostrar el mensaje de error
            return back()->withErrors($errores); 
            /* return view('empleado'); */
    }
}

    public function register()
    {
        return view('registro');
    }

    public function registrar(Request $request){

        $registro = new personas();
        $registro -> nombre= $request -> nombreApellido;
        $registro -> correo = $request -> correo;
        $registro -> password = bcrypt($request->contrasena);//Metodo para encriptar la contraseña por el metodo "Hash"
        $registro -> cedula = $request -> cedula;
        $registro ->save(); //Guarda todo el registro.
        
        return $this->foranea_sesion();
        
    }

    public function foranea_sesion()
    {
        $personas =personas::all();
        return view('registro2', compact('personas'));//Redirecciona a la pagina del segundo registro para su respectivo logueo"

    }


    public function principal(Request $request)
    {
        $registro = new empresa();
        $registro-> id_usuario = $request -> personas;
        $registro -> empresa= $request -> empresa;
        $registro -> area = $request->area; 
        $registro -> cargo = $request -> cargo;
        $registro ->save(); //Guarda todo el registro.
        return redirect('/');
    }

    public function logout(Request $request)
    //Función de cerrar sesión
    {
        Auth::logout(); // Cerrar sesión utilizando el servicio de autenticación
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
