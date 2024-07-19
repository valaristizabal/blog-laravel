<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto px-auto">
        {{-- <h1>Bienvenido a la página principal</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi quas dignissimos accusamus, corporis dolor reiciendis atque vero eveniet, quasi distinctio incidunt architecto voluptate nulla molestias soluta nobis unde quidem veniam.</p> --}}
        <x-alert2 type="info">
            <x-slot name="titulo">
                ALERTAAA
            </x-slot>
            Alerta en home
        </x-alert2>
        <x-alert type="danger">
            <x-slot name="titulo">
                ALERTAAA
            </x-slot>

            <x-slot name="opcional">
                TEXTO CAMBIOOO
            </x-slot> 
            Alerta en home
        </x-alert>
    </div>
</body>
</html>