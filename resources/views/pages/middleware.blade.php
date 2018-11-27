@extends('layouts.app')


@section('page-content')
    <h1>{{ $site_title }}</h1>
    <p>data:</p>


    @if( count($data) > 0 )
        @foreach( $data as $d )
        <div style="border: 1px solid grey; border-radius: 3px; background-color: white;margin-bottom: 10px">{{ $d['name'] }}
            <h3>{{ $d['desc'] }}</h3>
        </div>
        @endforeach
    @else 
        <p>No data found :(</p>
    @endif
@endsection