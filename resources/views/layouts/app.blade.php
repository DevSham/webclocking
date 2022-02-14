<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Pure RBI') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style>
            /* since nested groupes are not supported we have to use
               regular css for the nested dropdowns
            */
            li>ul                 { transform: translatex(100%) scale(0) }
            li:hover>ul           { transform: translatex(101%) scale(1) }
            li > button svg       { transform: rotate(-90deg) }
            li:hover > button svg { transform: rotate(-270deg) }

            /* Below styles fake what can be achieved with the tailwind config
               you need to add the group-hover variant to scale and define your custom
               min width style.
                 See https://codesandbox.io/s/tailwindcss-multilevel-dropdown-y91j7?file=/index.html
                 for implementation with config file
            */
            .group:hover .group-hover\:scale-100 { transform: scale(1) }
            .group:hover .group-hover\:-rotate-180 { transform: rotate(180deg) }
            .scale-0 { transform: scale(0) }
            .min-w-32 { min-width: 8rem }
        </style>
    </head>
    <body class="font-sans antialiased">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            {{ $header ?? '' }}
        </div>
    </header>
        <!-- Page Content -->
        <main>
            {{ $slot ?? '' }}
{{--            @yield('content')--}}

        </main>

    </div>
    <script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".js_tap_btn").click(function() {
                $(".js_tap_btn").removeClass("active text-blue-800").addClass("text-blue-400 hover:text-blue-800"); //removing active and font-text-800 from all tab btns, add hover:text-blue-800 in all tabs
                $(this).removeClass("text-blue-400 hover:text-blue-800").addClass("active text-blue-800"); // adding active class and text color to clicked tab
                let tab_to_show = $(this).data("tab_id"); // getting tab id to un-hide from clicked tab using data attribute;
                $(".js_tab_view").addClass("hidden"); //hiding all tabs using tailwind css;
                $(`#${tab_to_show}`).removeClass("hidden"); // removing class hidden from wanted tab only, note that i am using Grave Accent symbol instead for inverted comma ;
            });
        });
    </script>
    </body>
</html>
