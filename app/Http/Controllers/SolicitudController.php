<?php

namespace App\Http\Controllers;

use App\Models\{permisos, personas, empresa};
use Illuminate\Support\Facades\{Auth, hash};
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function login(Request $request)
    //login validación y autenticación usuarios
    {

            return view('login');
        }

    public function login_inicio(Request $request)
    {
        $usuario = personas::where('correo', $request->email)->first();
        if (!$usuario) {
            
            return back()->withErrors(['email' => 'El correo no existe']);// El usuario no existe, muestra un mensaje de error
        }
        if (Hash::check($request->password, $usuario->password)) {
            
            $token = auth()->login($usuario);// Obtener el token de acceso del usuario
            
            $request->session()->put('accessToken', $token);// Almacenar el token de acceso en la sesión del usuario
            $request->session()->regenerate();

            $empresa = empresa::where('id_usuario', $usuario->id)->first();

            //Inicio de filtros para seleccionar vistas "Primera empresa"
            if($empresa->empresa === '1'){
                if($empresa->area === '1'){//Asistencial
                    if($empresa->cargo === '1'){
                        return view('empleado');
                    }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                        return view('jefe');
                    }
                }else if($empresa->area === '2'){//TI
                    if($empresa->cargo === '1'){
                        return view('empleado');
                    }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                        return view('jefe');
                    }
                }else if($empresa->area === '3'){//TH
                    if($empresa->cargo === '1'){
                        return view('empleado');
                    }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                        return view('jefe');
                    }
                }else if($empresa->area === '4'){//Contabilidad
                    if($empresa->cargo === '1'){
                        return view('empleado');
                    }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                        return view('jefe');
                    }
                }else if($empresa->area === '5'){//Cartera
                    if($empresa->cargo === '1'){
                        return view('empleado');
                    }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                        return view('jefe');
                    }
                }else if($empresa->area === '6'){//Administrativa
                    if($empresa->cargo === '1'){
                        return view('empleado');
                    }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                        return view('jefe');
                    }
                }else if($empresa->area === '7'){//Facturación
                    if($empresa->cargo === '1'){
                        return view('empleado');
                    }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                        return view('jefe');
                    }
                }else if($empresa->area === '8'){//Comercial
                    if($empresa->cargo === '1'){
                        return view('empleado');
                    }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                        return view('jefe');
                    }
                }else if($empresa->area === '9'){//Planeación
                    if($empresa->cargo === '1'){
                        return view('empleado');
                    }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                        return view('jefe');
                    }
                }else if($empresa->area === '10'){//Servicio al cliente
                    if($empresa->cargo === '1'){
                        return view('empleado');
                    }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                        return view('jefe');
                    }
                }else if($empresa->area === '11'){//Calidad
                    if($empresa->cargo === '1'){
                        return view('empleado');
                    }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                        return view('jefe');
                    }
                }else if($empresa->area === '12'){//Gerencia médica
                    if($empresa->cargo === '1'){
                        return view('empleado');
                    }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                        return view('jefe');
                    }
                }
            /* dd($empresa); */
            //Inicio de filtros para seleccionar vistas "Segunda empresa"
        }else if($empresa->empresa === '2'){
            if($empresa->area === '1'){
                if($empresa->cargo === '1'){//Empleados
                    return view('empleado');
                }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){ //Lideres en adelante
                    return view('jefe');
                }
            }else if($empresa->area === '2'){
                if($empresa->cargo === '1'){
                    return view('empleado');
                }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                    return view('jefe');
                }
            }else if($empresa->area === '3'){
                if($empresa->cargo === '1'){
                    return view('empleado');
                }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                    return view('jefe');
                }
            }else if($empresa->area === '4'){
                if($empresa->cargo === '1'){
                    return view('empleado');
                }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                    return view('jefe');
                }
            }else if($empresa->area === '5'){
                if($empresa->cargo === '1'){
                    return view('empleado');
                }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                    return view('jefe');
                }
            }else if($empresa->area === '6'){
                if($empresa->cargo === '1'){
                    return view('empleado');
                }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                    return view('jefe');
                }
            }else if($empresa->area === '7'){
                if($empresa->cargo === '1'){
                    return view('empleado');
                }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                    return view('jefe');
                }
            }else if($empresa->area === '8'){
                if($empresa->cargo === '1'){
                    return view('empleado');
                }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                    return view('jefe');
                }
            }else if($empresa->area === '9'){
                if($empresa->cargo === '1'){
                    return view('empleado');
                }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                    return view('jefe');
                }
            }else if($empresa->area === '10'){
                if($empresa->cargo === '1'){
                    return view('empleado');
                }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                    return view('jefe');
                }
            }else if($empresa->area === '11'){
                if($empresa->cargo === '1'){
                    return view('empleado');
                }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                    return view('jefe');
                }
            }else if($empresa->area === '12'){
                if($empresa->cargo === '1'){
                    return view('empleado');
                }else if($empresa->cargo === '2' || $empresa->cargo === '3' || $empresa->cargo === '4' || $empresa->cargo === '5'){
                    return view('jefe');
                }
            }
        /* dd($empresa); */
        //Inicio de filtros para seleccionar vistas
    }else{
            
            $errores = [];// Validar errores
            if (!$usuario) {
                $errores['usuario'] = 'El correo no existe';
            }else if (!Hash::check($request->password, $usuario->password)) {
                $errores['password'] = 'La contraseña es incorrecta';
            }
            
            return back()->withErrors($errores); // Mostrar el mensaje de error
        }
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
        $registro -> especificacion = $request -> especifi;
        $registro ->save(); //Guarda todo el registro.

        if ($request->cargo === '1') {
            $registro->assignRole('empresario');
        }
        if ($request->cargo === '2') {
            $registro->assignRole('lider');
        }

        if ($request->cargo === '3') {
            $registro->assignRole('director');
        }

        if ($request->cargo === '4') {
            $registro->assignRole('gerente');
        }

        if ($request->cargo === '5') {
            $registro->assignRole('vicepresidente');
        }

        return redirect('/');
    }

    public function visitas()
    {
        $personas =personas::all();
        return view('registro2', compact('personas'));//Redirecciona a la pagina del segundo registro para su respectivo logueo"

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
