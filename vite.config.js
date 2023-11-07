import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/login.css', 
                    'resources/js/login.js','resources/css/registrarse.css','resources/js/registrarse.js',
                    'resources/css/registrarse2.css', 'resources/css/prueba.css'],
            refresh: true,
        }),
    ],
});
