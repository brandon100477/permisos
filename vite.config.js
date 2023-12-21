import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/login.css', 
                    'resources/js/login.js','resources/css/registrarse.css','resources/js/registrarse.js',
                    'resources/css/registrarse2.css', 'resources/css/prueba.css','resources/css/empleado/empleado.css',
                    'resources/css/empleado/registros.css', 'resources/css/empleado/nuevo_permiso.css', 'resources/js/nuevo_permiso.js',
                    'resources/css/jefe/jefe.css', 'resources/css/jefe/solicitud.css', 'resources/css/th/principal.css',
                    'resources/css/jefe/actualizar.css', 'resources/js/actualizar.js', 'resources/css/th/archivo.css',
                    'resources/css/th/revisar.css', 'resources/css/th/firmar.css', 'resources/js/firmar.js', 'resources/css/jefe/solicitudes.css', 'resources/js/archivo.js',
                    'resources/css/view.css', 'resources/js/delete.js', 'resources/css/delete.css', 'resources/css/enable.css', 'resources/js/enable.js' ],
            refresh: true,
        }),
    ],
});
