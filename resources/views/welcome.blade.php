<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <!-- Styles -->
        {{-- <link href="https://unpkg.com/tailwindcss@^1/dist/tailwind.min.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}} ">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    @php
        $color  = 'yellow';   
        $alert = 'alert';
    @endphp
    <body>
        <div class="container mx-auto">
            <x-alert color='red' class="mb-4">
                <x-slot name="tittle">
                    Titulo 1
                </x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, quasi incidunt reprehenderit quaerat nulla aliquam, commodi pariatur itaque possimus veritatis quas tempore. Inventore doloribus necessitatibus nisi culpa aspernatur, ipsa sint.
            </x-alert >

            <x-alert :color='$color' >
                <x-slot name="tittle">
                    Titulo 2
                </x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, quasi incidunt reprehenderit quaerat nulla aliquam, commodi pariatur itaque possimus veritatis quas tempore. Inventore doloribus necessitatibus nisi culpa aspernatur, ipsa sint.
            </x-alert >
             {{-- <x-alert :color='$color' >
                <x-slot name="tittle">
                    Titulo 2
                </x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, quasi incidunt reprehenderit quaerat nulla aliquam, commodi pariatur itaque possimus veritatis quas tempore. Inventore doloribus necessitatibus nisi culpa aspernatur, ipsa sint.
            </x-alert >

            <x-alert :color='$color' >
                <x-slot name="tittle">
                    Titulo 2
                </x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, quasi incidunt reprehenderit quaerat nulla aliquam, commodi pariatur itaque possimus veritatis quas tempore. Inventore doloribus necessitatibus nisi culpa aspernatur, ipsa sint.
            </x-alert > --}}

            <x-alert2 color="red" class="mb-4" >
                <x-slot name="tittle">
                     Titulo de prueba
                </x-slot>

                Lorem, ipsum dolor sit amet consectetur adipisicing elit. A excepturi quod repellat totam cumque unde alias, minus modi nobis tempora magnam eveniet cum similique dolorem quas id fugiat. Officia, aperiam?
            </x-alert2>

            <x-alert2 color="blue"  >
                <x-slot name="tittle">
                     Titulo de prueba2
                </x-slot>

                Lorem, ipsum dolor sit amet consectetur adipisicing elit. A excepturi quod repellat totam cumque unde alias, minus modi nobis tempora magnam eveniet cum similique dolorem quas id fugiat. Officia, aperiam?
            </x-alert2>

            <x-dynamic-component :component="$alert">
                <x-slot name="tittle">
                    Titulo 2
                </x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, quasi incidunt reprehenderit quaerat nulla aliquam, commodi pariatur itaque possimus veritatis quas tempore. Inventore doloribus necessitatibus nisi culpa aspernatur, ipsa sint.   
            </x-dynamic-component>

           
                
        </div>
    </body>
</html>
