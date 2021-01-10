<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Comics</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @extends('layouts.app')

        @section('content')
            <div class="section-dettagli">
                <div class="container">
                    <div class="info-film clearfix">
                        <div class="dettagli-film">
                            <h2>{{ $film['title'] }}</h2>
                            <div class="img-film">
                                <img src="{{ $film['thumb'] }}" alt="">
                            </div>
                            <p>{{ $film['description'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    </body>
</html>
