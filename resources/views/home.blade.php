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
        <div class="section-list-films">
            <div class="container">
                <div class="list-films clearfix">
                    @foreach ($series as $single_serie)
                    <div class="single-film">
                        <div class="img-film">
                            <img src="{{ $single_serie['thumb'] }}" alt="">
                        </div>
                        {{ $single_serie['title'] }}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endsection
    </body>
</html>
