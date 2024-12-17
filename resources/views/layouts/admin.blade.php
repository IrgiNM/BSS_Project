<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="https://kit.fontawesome.com/3b1476001d.js" crossorigin="anonymous">
        </script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            @import url(https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic);
            @import url(https://fonts.googleapis.com/css2?family=Lilita+One&display=swap);

            * {
                color: #1e1442;
                padding: 0;
                font-family: poppins;
                margin: 0px;
            }
            .lilita-one-regular {
            font-family: "Lilita One", sans-serif;
            font-weight: 400;
            font-style: normal;
            }
            .kereng {
                font-weight: 1000;
            }
            .bgsablon {
                background-image: url({{ asset('images/BGIMAGE1.png') }});
            }
            .backim {
                z-index: 1;
            }
            .div {
                z-index: 2;
            }
            .depan {
                z-index: 10;
            }
            .depan1 {
                z-index: 11;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-[#fcfbff]">

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="bg-[#ffffff]">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
