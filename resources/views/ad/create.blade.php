@extends('app')

@section('content')
    <h1>Create</h1>
    {!! Form::open(['route' => 'ad.store']) !!}
    @include('ad._form');
    {!! Form::close()!!}
@stop