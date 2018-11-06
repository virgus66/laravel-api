@extends('layouts.app')

@section('page-content')
    <h1 style="margin-top: 90px;"> {{ $details->title }}</h1>
    <small style="margin-bottom: 100px;">Created at {{ $details->created_at }}</small> <br>
    <small style="margin-bottom: 100px;">Updated at {{ $details->updated_at }}</small>

    <br><br>

    <div>Bio: {{ $details->bio }}</div>
    <div>address: {{ $details->address }}</div>
@endsection