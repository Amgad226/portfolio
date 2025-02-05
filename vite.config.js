import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css', 
                'resources/css/personal-projects.css', 
                'resources/css/work-projects.css', 
                'resources/js/app.js'
            ], 
            refresh: true,

        }),
        
    ],

});
