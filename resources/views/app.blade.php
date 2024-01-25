<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @inertiaHead
  </head>
  <body>
    @inertia
    {{-- '@inertia' is basically for convienence purposes, and equates to something like this: --}}
    {{-- <div id="app" data-page="{{ json_encode($page) }}"></div> --}}
  </body>
</html>