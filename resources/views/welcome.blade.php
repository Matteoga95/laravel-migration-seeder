<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="p-5 mb-4 bg-light rounded-3 text-center">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Welcome to the train station</h1>
            <p class="col-md-8 fs-4">Find out our trains to get where you want!!</p>
            <button class="btn btn-primary btn-lg" type="button">Find out more</button>
        </div>
    </div>
    <div class="content">
        <div class="container my-5">
            <div class="row g-4">
                @forelse($trains as $train)
                <div class="col-6">
                    <div class="card">

                        <div class="card-body">
                            @if (is_null($train->stazione_di_arrivo) )
                            <h3>Treno in arrivo da {{$train->stazione_di_partenza}} alle {{$train->orario_di_arrivo}}
                            </h3>

                            @else

                            <h3>Treno per {{$train->stazione_di_arrivo}} in arrivo alle {{$train->orario_di_partenza}}
                            </h3>
                            @endif

                            <p>Treno numero: {{$train->codice_treno}} della compagnia: {{$train->azienda}} con
                                {{$train->numero_carrozze}} carrozze a bordo.
                            </p>

                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <p>
                        🙄 Sorry, no trains in the database yet.
                    </p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</body>

</html>