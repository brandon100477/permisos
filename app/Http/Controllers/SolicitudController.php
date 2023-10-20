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
            return back()->withErrors(['email' => 'El correo no existe']);// El correo no existe, muestra un mensaje de error
        }
        if (Hash::check($request->password, $usuario->password)) {
            $token = auth()->login($usuario);// Obtener el token de acceso del usuario
            $request->session()->put('accessToken', $token);// Almacenar el token de acceso en la sesión del usuario
            $request->session()->regenerate();

            $empresa = empresa::where('id_usuario', $usuario->id)->first();
            //Inicio de filtros para seleccionar vistas
            $empresaTipo = $empresa->empresa;
            $area = $empresa->area;
            $cargo = $empresa->cargo;

            if (in_array($empresaTipo, ['1', '2', '3'])) {
                if (in_array($area, ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'])) {
                    if ($cargo === '1') {
                        return view('empleado');
                    } elseif (in_array($cargo, ['2', '3', '4', '5'])) {
                        return view('jefe');
                    }
                }
            }
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
    public function register()
    {
        return view('registro');
    }
    public function registrar(Request $request)
    {
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

        return redirect('/login');
    }

    public function visitas()
    {
        $personas =personas::all();
        return view('registro2', compact('personas'));//Redirecciona a la pagina del segundo registro para su respectivo logueo"
    }

    public function logout(Request $request)//Función de cerrar sesión
    {
        Auth::logout(); // Cerrar sesión utilizando el servicio de autenticación
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function permisos(Request $request)
    {
        $id=auth()->user()->id;
        $usuario =personas::where('id', $id)->first();
        $id_usuario= $usuario->id;

        $cargo= empresa::where('id_usuario', $id)->first();
        $id_cargo= $cargo->id;//Asignación del cargo
        

        $empresas = [ //asiganción de empresa
            '1' => 'Cedicaf',
            '2' => 'Radiologos Asociados',
            '3' => 'Diaxme Salud',
        ];
        $empresa = $empresas[$cargo->empresa] ?? 'Empresa Desconocida';
        
        //Asignación de areas
        $areas = [
            '1' => 'Asistencial',
            '2' => 'TI (sistemas)',
            '3' => 'Talento Humano',
            '4' => 'Contabilidad',
            '5' => 'Cartera',
            '6' => 'Administrativa',
            '7' => 'Facturación',
            '8' => 'Comercial',
            '9' => 'Planeación',
            '10' => 'Servicio al cliente',
            '11' => 'Sistema Integrado de gestión (Calidad)',
            '12' => 'Gerencia médica',
        ];
        $area = $areas[$cargo->area] ?? 'Área Desconocida';
        return view('nuevo_permiso', compact('area', 'empresa','id_usuario', 'id_cargo'));//Redirecciona a la pagina del segundo registro para su respectivo logueo"
    }
    public function registros()
    {
        return view('registros');//Redirecciona a la pagina del segundo registro para su respectivo logueo"
    }
    
    public function prevista()
    {   

        
        return view('prevista');//Redirecciona a la pagina del segundo registro para su respectivo logueo"
    }

    public function solicitud()
    {
        return view('ver-permiso');//Redirecciona a la pagina del segundo registro para su respectivo logueo"
    }
    public function registros2()
    {
        return view('registro_avanzado');//Redirecciona a la pagina del segundo registro para su respectivo logueo"
    }
    public function permisos2()
    {
        return view('nuevo_avanzado');//Redirecciona a la pagina del segundo registro para su respectivo logueo"
    }

    public function firmado(Request $request)
    {    
        $data = $request->all();

        
        if ($data['permiso'] === 'Otro') {// Verifica si se seleccionó "Otro" como motivo del permiso
            
            $justificacion = $data['justificado'];// Guarda el valor justificado.
        }else{
            $justificacion = $data['permiso'];
        }

        if ($request->firma_th === null) {// Verifica si se seleccionó "Otro" como motivo del permiso
            
            $estado = 'Pendiente';// Guarda el valor justificado.
        }

        
        $file = time().".".$request->firma_e->extension();
        /* dd($file); */
        ($request->firma_e)->move(public_path("firma_e", $file));


        $registro = new permisos();
        $registro -> id_usuario = $request -> usuario_id;
        $registro -> id_cargo = $request -> cargo_id;
        $registro -> info_permiso = $justificacion;
        $registro -> horas_dias = $request -> tiempo;
        $registro -> hora_inicio = $request-> hora_inicio;
        $registro -> hora_fin = $request -> hora_fin;
        $registro -> dias = $request -> dias;
        $registro -> remunerado = $request -> adicional;
        $registro -> firma_empleado = $request-> firma_e;
        $registro -> firma_jefe = $request -> firma_jefe;
        $registro -> firma_th = $request -> firma_th;
        $registro -> observaciones = $request-> observaciones;
        $registro -> estado_solicitud = $estado;
        $registro -> p_c_l = $request->pcl;
      /*   $registro->save(); */

        return view('prueba');//Redirecciona a la pagina del segundo registro para su respectivo logueo"
    }
    
}
