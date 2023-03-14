<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        @foreach ($treni as $treno)
        <div>
            Azienda: {{ $treno->nome_azienda }}
            /
            Stazione di partenza: {{ $treno->stazione_partenza }}
            /
            Stazione di arrivo: {{ $treno->stazione_arrivo }}
            /
            Codice treno: {{ $treno->codice_treno }}
            /
            Numero carrozze: {{ $treno->numero_carrozze }}
            /
            In orario: {{ $treno->in_orario }}
            /
            Cancellato: {{ $treno->cancellato }}
            /
            Orario di partenza: {{ $treno->orario_partenza }}
            /
            Orario di arrivo: {{ $treno->orario_arrivo }}
        </div>
        @endforeach

    </body>
</html>
