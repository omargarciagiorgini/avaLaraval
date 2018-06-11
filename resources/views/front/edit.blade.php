@extends('layout')
@extends('navbar')

@section('contenido')
<h3> edit </h3>
{!! Form::model($datos, ['route' => ['productos.update', $datos->id],'method'=> 'PUT']) !!}
@include('front.fragments.form')

{!! Form::close() !!}
@endsection