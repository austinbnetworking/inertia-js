# Inertia JS Example App

Completed with Jeffrey Way - https://laracasts.com/series/build-modern-laravel-apps-using-inertia-js

## How This Site Was Setup

1. Installed fresh laravel application - `laravel new inertia-js`
2. Installed server side Inertia.js - `composer require inertiajs/inertia-laravel`
3. Renamed `welcome.blade.php` to `app.blade.php`
4. Overwrote `app.blade.php` with default Inertia template - See https://inertiajs.com/server-side-setup for code
5. Initialized Inertia middleware - `php artisan inertia:middleware`
6. Registered Inertia middleware inside main kernal class - See https://inertiajs.com/server-side-setup for example
7. Installed client side Inertia.js, specifically for Vue3 - `npm install @inertiajs/vue3` - See https://inertiajs.com/server-side-setup
8. Installed Vue3 and it's necessary dependencies - `npm create vue@latest` - https://vuejs.org/guide/quick-start
9. Recommended commands ran from the Vue3 install - `cd vue-project`, `npm install`, `npm run build`
10. Installed Inertia.js default script into `resources/js/app.js` - See https://inertiajs.com/client-side-setup
11. Created Pages directory inside `resources/js`, since we set up Inertia to look there for pages
12. Installed Vue3 Vite plugin for compiling - `npm install @vitejs/plugin-vue` 
13. Added Vue3 plugin to vite configuration - See `vite.config.js`
14. Initialized Inertia.js with page component resolver - See `resources/js/app.js` / https://inertiajs.com/client-side-setup
15. Compiled Vite assets - `npm run build` 
    1.  Alternatively, you can start a local development server with `npm run dev`
    2.  This will listen for any changes and automatically perform builds and pages refreshes as necessary
    3.  Saves time by not constantly having to build & refresh 
16. Replaced web.php default route to be rendered with Inertia - See `routes/web.php`
17. Added routes for basic welcome pages, rendered with Inertia. 

Note about Vite:
- There are two ways you can run Vite. You may run the development server via the dev command, which is useful while developing locally. The development server will automatically detect changes to your files and instantly reflect them in any open browser windows.
- Or, running the build command will version and bundle your application's assets and get them ready for you to deploy to production.

Note about Vue:
- Whenever you see SFC, that simply refers to Single-File Components.

Note about Tailwind:
- Installation for Laravel is listed here - https://tailwindcss.com/docs/guides/laravel

Left off at Ep. 12 - https://laracasts.com/series/build-modern-laravel-apps-using-inertia-js/episodes/7

Next up: https://laracasts.com/series/learn-vue-3-step-by-step