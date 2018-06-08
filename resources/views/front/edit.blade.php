@extends('layout')
@extends('navbar')

@section('contenido')
<h3> edit </h3>
{!! Form::model($datos, ['route' => ['productos.update', $datos->id],'method'=> 'PUT']) !!}
<div class='form-group'>
  {!!Form::label('name', 'Nombre') !!}
  {!!Form::text('name', null, ['class' => 'form-control']) !!}
  
</div>

<div class='form-group'>
  {!!Form::label('short', 'Breve Descripcion') !!}
  {!!Form::text('short', null, ['class' => 'form-control']) !!}
  
</div>

<div class='form-group'>
  {!!Form::label('body', 'Descripcion Completa') !!}
  {!!Form::textarea('body', null, ['class' => 'form-control']) !!}
  
</div>

<div class='form-group'>
  {!!Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
  
  
</div>
{!! Form::close() !!}
@endsection
<!--
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" 
                value="{{$datos->name}}" >
    
  </div>
  <div class="form-group">
  <input type="text" class="form-control" id="exampleInputEmail1"  
        value="{{$datos->short}}">
    
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" rows="3">
            {{$datos->body}}
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
-->