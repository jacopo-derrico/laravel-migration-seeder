<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')

    <title>Trains</title>
</head>
<body>
    <h1 class="text-center my-5">Trains</h1>

    <main class="container">
        <div class="row gap-2 ">
            @foreach ($trains as $train)
            <div class="card col-3">
                <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $train['azienda'] }}</h5>
                  <h6 class="card-title">CT: {{ $train['codice_treno'] }}</h6>
                  <p class="card-text">{{ $train['stazione_partenza'] }} - {{ $train['orario_partenza'] }}</p>
                  <p class="card-text">{{ $train['stazione_arrivo'] }} - {{ $train['orario_arrivo'] }}</p>
                  <p class="card-text">Carrozze: {{ $train['numero_carrozze'] }} -
                    <span>
                        @if($train['in_orario'] == 1)
                           In orario.
                        @else
                            In ritardo.
                        @endif
                    </span>
                </p>
                </div>
              </div>
            @endforeach
        </div>
    </main>
</body>
</html>