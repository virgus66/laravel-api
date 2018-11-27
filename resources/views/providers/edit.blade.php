@extends('layouts.app')

@section('page-content')
    <h1> Edit Provider</h1>

    {!! Form::open(['action' => ['ProvidersController@update', $provider->id], 'method'=>'POST']) !!}
        <div class='form-group'>
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $provider->title, ['class'=>'form-control', 'placeholder'=>'Title'])}} 
        </div>
        <div class='form-group'>
            {{Form::label('address', 'Address')}}
            {{Form::text('address', $provider->address, ['class'=>'form-control', 'placeholder'=>'Address'])}}
        </div>
        <div class='form-group'>
            {{Form::label('bio', 'Bio')}}
            {{Form::textarea('bio', $provider->bio, ['class'=>'form-control', 'placeholder'=>'Bio', 'id'=>'article-ckeditor'])}}
        </div>
        {{-- to make form perform put request paste somewhere in the form @method('PUT') or: --}}
        {{Form::hidden('_method', 'PUT')}}
		{{Form::submit('Update', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}


    {{-- Komentarze w blade. This comment will not be present in the rendered HTML --}}
		@php
			// wbudowany php w blade template
			echo '<br><br>';
	    echo 'Fill all the fields, please.';
    	// komentarz we wbudowanym php
    @endphp
@endsection