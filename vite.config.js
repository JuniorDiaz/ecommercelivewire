import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 'resources/js/app.js',

                'resources/views/layouts/partials/admin/assets/css/style.css',
                'node_modules/@fortawesome/fontawesome-free/css/all.css',

                'resources/views/layouts/partials/admin/assets/js/off-canvas.js',
                'resources/views/layouts/partials/admin/assets/js/hoverable-collapse.js',
                'resources/views/layouts/partials/admin/assets/js/misc.js',
                'resources/views/layouts/partials/admin/assets/js/settings.js',
                'resources/views/layouts/partials/admin/assets/js/dashboard.js',
                'resources/views/layouts/partials/admin/assets/js/data-table.js',
                'resources/views/layouts/partials/admin/assets/js/modal-demo.js'
            ],
            refresh: true,
        }),
    ],
});
