<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @yield('meta_info')

        <x-styles />

        @stack('styles')
    
    </head>
    
    <body class="home-5 home-6 home-8 home-9 home-furniture">

        <div id="main">
            <x-header />
            {{ $slot }}
            <x-footer />        
        </div>

        <x-scripts />
        
        @stack('scripts')
    </body>
</html>
