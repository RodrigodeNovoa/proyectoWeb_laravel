@extends('layouts.landing')
<!--la directiva extends de blade, le indica a nuestro index que use como plantilla el 'landing' -->
<!--la ruta aqui parte desde Views -->

@section('title', 'Home')
<!--inyecto el contenido de index en landing que es la plantilla. -->

@section('body')
    <h1> Index </h1>
@endsection
<!--otra forma de inyectar, pero esta vez quiero inyectar contenido Html, no un string -->
    
