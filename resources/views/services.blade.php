@extends('layouts.landing')
@section('title', 'Services')
@section('body')
    <h1> Cuerpo del servicios </h1>
    <div class="cards">
        @component('_components.card')
            @slot('title', 'Serivice 1')
            @slot('content', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi voluptate perspiciatis suscipit exercitationem voluptatibus repudiandae. Vero, cupiditate at. Non suscipit natus magni aliquam harum debitis, ipsam sapiente doloremque nam rem.')
        @endcomponent

        @component('_components.card')
            @slot('title', 'Serivice 2')
            @slot('content')
                <h3>Example</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            @endslot
        @endcomponent
    </div>
@endsection
