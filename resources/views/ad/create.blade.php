@extends('app')

@section('content')
    @include('errors.list')
    <h1>Create</h1>
    {!! Form::open(['route' => 'ad.store']) !!}
    @include('ad._form', ['submitButtonText' => "Create"]);
    {!! Form::close()!!}


@stop