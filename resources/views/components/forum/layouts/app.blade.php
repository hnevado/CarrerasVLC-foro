<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
     <style>
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        }
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
 </head>
 <body>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100">
    <div class="bg-white shadow-sm border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="text-center">
                <h1 class="text-3xl md:text-4xl font-bold text-slate-800 mb-2">
                    <a href="{{route('home')}}">CarrerasVLC Foro</a>
                </h1>
                <p class="text-slate-600 text-lg">
                    Las últimas preguntas de la comunidad running en Valencia
                </p>
            </div>
        </div>
    </div>
    <div>
        {{ $slot }}
    </div>
    <footer class="mt-16 bg-white shadow-sm border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center">
                <div class="flex justify-center items-center space-x-6 text-sm text-slate-500">
                    <span>•</span>
                    <a href="#" class="hover:text-slate-700 transition-colors duration-200">Registro</a>
                    <span>•</span>
                    <a href="#" class="hover:text-slate-700 transition-colors duration-200">Login</a>
                    <span>•</span>
                    <a href="#" class="hover:text-slate-700 transition-colors duration-200">Aviso Legal</a>
                    <span>•</span>
                    <a href="#" class="hover:text-slate-700 transition-colors duration-200">Privacidad</a>
                    <span>•</span>
                    <a href="#" class="hover:text-slate-700 transition-colors duration-200">Cookies</a>
                    <span>•</span>
                    <a href="#" class="hover:text-slate-700 transition-colors duration-200">Contacto</a>
                    <span>•</span>
                    <a href="#" class="hover:text-slate-700 transition-colors duration-200">Blog</a>
                </div>
            </div>
        </div>
    </footer>
  </div>
 </body>
</html>
