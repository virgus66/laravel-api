@extends('layouts.app')

@section('page-content')
    <h1> Create Provider</h1>

    {!! Form::open(['action' => 'ProvidersController@store', 'method'=>'POST']) !!}
        <div class='form-group'>
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}} 
        </div>
        <div class='form-group'>
            {{Form::label('address', 'Address')}}
            {{Form::text('address', '', ['class'=>'form-control', 'placeholder'=>'Address'])}}
        </div>
        <div class='form-group'>
            {{Form::label('bio', 'Bio')}}
            {{Form::textarea('bio', '', ['class'=>'form-control', 'placeholder'=>'Bio', 'id'=>'article-ckeditor'])}}
		</div>
		{{Form::submit('Add', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}


    {{-- Komentarze w blade. This comment will not be present in the rendered HTML --}}
		@php
			// wbudowany php w blade template
			echo '<br><br>';
	    echo 'Fill all the fields, please.';
    	// komentarz we wbudowanym php
    @endphp
@endsection