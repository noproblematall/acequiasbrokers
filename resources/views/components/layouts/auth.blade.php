<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Google Fonts for custom fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    
    <!-- Custom font styles for non-Google fonts -->
    <style>
        @font-face {
            font-family: 'GEOMETOS';
            src: url('https://fonts.cdnfonts.com/css/geometos') format('woff2');
            font-weight: normal;
            font-style: normal;
        }
        
        @font-face {
            font-family: 'HelveticaNeue';
            src: url('https://fonts.cdnfonts.com/css/helvetica-neue-9') format('woff2');
            font-weight: normal;
            font-style: normal;
        }
        
        /* Font family mapping for consistent usage */
        .font-geometos { font-family: 'GEOMETOS', sans-serif !important; }
        .font-helvetica-neue { font-family: 'HelveticaNeue', 'Helvetica Neue', sans-serif !important; }
        .font-ubuntu { font-family: 'Ubuntu', sans-serif !important; }
        .font-helvetica-neue-roman { font-family: 'Helvetica Neue Roman', 'Times New Roman', serif !important; }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md">
            <div class="bg-white rounded-lg shadow-md p-8">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
</html>