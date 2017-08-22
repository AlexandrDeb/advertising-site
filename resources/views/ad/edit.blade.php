@extends('app')

@section('content')
    @include('errors.list')
    <h1>Edit {!! $ads->title !!}</h1>

    {!! Form::model($ads,['method' => 'PATCH', 'action' => ['AdController@update', $ads->id]]) !!}
    @include('ad._form', ['submitButtonText' => "Update"]);
    {!! Form::close()!!}



@stop