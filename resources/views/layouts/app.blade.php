<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'yilsau') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="font-sans min-h-screen antialiased yilsau-body">

    <!-- Flex container for the entire page -->
    <div class="flex flex-col min-h-screen w-full">

        <!-- Include Navigation -->
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main class="flex-1">
            {{ $slot }}
        </main>

        <!-- Footer -->
     
        
        <footer class="bg-dark text-white text-center py-4">
            <p>Síguenos en nuestras redes sociales</p>
            <div class="flex justify-center gap-2">
                <a href="https://www.instagram.com/yilsau_/" target="_blank" rel="noopener noreferrer" class="hover:text-yellow-500 transition-colors duration-300">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="hover:text-blue-500 transition-colors duration-300">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
            <div>
                <p>&copy; {{ date('Y') }} Yilsau. Todos los derechos reservados.</p>
            </div>
        </footer>
        

    </div>

    @livewireScripts
    @stack('scripts')
</body>
</html>
