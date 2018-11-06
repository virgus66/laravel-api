@extends('layouts.app')

@section('page-content')
    <h1>Service {{ $site_title }}</h1>
    <p>provider name:</p>

    @if( count($providers) > 0 )
        <ul class="list-group">
            @foreach( $providers as $provider )
                <li class="list-group-item">{{$provider['name'].' - '.$provider['title'].' - '.$provider['service']}} </li>
            @endforeach
        </ul>
    @endif
@endsection