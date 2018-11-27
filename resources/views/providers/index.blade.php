@extends('layouts.app')

@section('page-content')
    <h1>Services Providers</h1>
    
    <div class="text-right"><button class='btn btn-primary' onclick='location.href ="providers/create"'>Add provider</button></div>
    <div><small>list:</small></div>

    @if( count($providers) > 0 )
        @foreach( $providers as $provider )
            <div class="well" style="border: 1px solid grey; border-radius: 5px; background-color: white; margin-bottom: 10px; padding: 5px;">
                <h3><a href="/providers/{{ $provider->id }}">{{ $provider->title }}</a></h3>
                <small>{{ $provider->created_at }}</small>
            </div>
        @endforeach
        {{ $providers->links() }}
    @else 
        <p>No posts found</p>
    @endif

@endsection