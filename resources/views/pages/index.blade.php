@extends('layout.app')
@section('page-title', 'Homepage')

    @section('main-content')


    <h1>Ecco i treni in partenza oggi!!</h1>
    <section class="container">
        @foreach ($trains as $train)

        <article class="singleTrain">
                <h1>
                    Azienda: {{$train->azienda}}
                </h1>
                <h3>
                    Stazione di partenza: {{$train->stazione_di_partenza}}
                </h3>
                <div>
                    <p>Orario di partenza: {{$train->orario_di_partenza}}</p>
                    <p>Orario di arrivo: {{$train->orario_di_arrivo}}</p>
                    <p>Codice Treno: {{$train->codice_treno}} </p>
                </div>
        </article>

        @endforeach
    </section>

    @endsection
