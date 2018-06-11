@extends('layout')
@extends('navbar')

@section('contenido')
<h3> crear </h3>
{!! Form::open( ['route' => ['productos.store'],'method'=> 'POST']) !!}
 @include('front.fragments.form')
{!! Form::close() !!}
@endsection