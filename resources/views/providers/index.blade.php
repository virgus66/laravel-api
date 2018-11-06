@extends('layouts.app')

@section('page-content')
    <h1 style="margin-top: 90px;">Services Providers</h1>
    <small style="margin-bottom: 100px;">index</small>

    <br><Br><br><br>

    @if( count($providers) > 0 )
        @foreach( $providers as $provider )
            <div class="well" style="border: 1px solid grey; border-radius: 5px; background-color: white; margin-bottom: 10px; padding: 5px;">
                <h3><a href="http://localhost/laravel/projekt-przewozy/public/providers/{{ $provider->id }}">{{ $provider->title }}</a></h3>
                <small>{{ $provider->created_at }}</small>
            </div>
        @endforeach

        {{ $providers->links() }}
    @else 
        <p>No posts found</p>
    @endif

@endsection