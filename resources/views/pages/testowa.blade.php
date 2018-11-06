@extends('layouts.app')

@section('page-content')
    <h1>Tytul test</h1>
    <p>to  jest strona testowa laravel</p>

    {{ $numerek }}

    <div> {{ config('app.name', 'domyslnie') }} </div>
@endsection