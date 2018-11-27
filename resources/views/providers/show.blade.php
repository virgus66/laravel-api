@extends('layouts.app')

@section('page-content')
    <h1> {{ $details->title }}</h1>
    <div>
        <small style="margin-bottom: 100px;">Created at: {{ $details->created_at }}</small> ||
        <small style="margin-bottom: 100px;">Updated at: {{ $details->updated_at }}</small>
    </div>

    <br>

    <div style="border: 1px solid grey; border-radius: 5px; background-color: white; margin-bottom: 10px; padding: 5px;">
        <strong>Bio:</strong> {!! $details->bio !!} {{-- {!! this syntax will parse HTML in blade templates!!} --}}
    </div>
    <div>
        <strong>Address:</strong> {{ $details->address }}
    </div>

    <br>
    <div><a href='/providers/{{$details->id}}/edit' class="btn btn-warning">edit</a></div>
    {!!Form::open(['action' => ['ProvidersController@destroy', $details->id], 'method'=>'POST', 'class'=>'pull-right']) !!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection