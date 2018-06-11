@extends('layout')
@extends('navbar')

@section('contenido')
<div class="col-sm-8">
<table class="table table-dark table-hover table-striped ">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Short</th>
        <th colspan=3>  &nbsp; </th>
      </tr>
    </thead>
    <tbody>
    @foreach($datos as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->short}}</td>
        <td>
          <a href="{{ route('productos.show',$data->id)}}" class='btn btn-default'> Ver </a>
        </td>
        <td>
          <a href="{{ route('productos.edit',$data->id)}}" class='btn btn-default'> Editar </a>
        </td>
        <td>
          <form action="{{ route('productos.destroy',$data->id)}}" method="POST">
                  {{csrf_field()}}
                <input hidden name="_method"  value="DELETE">
                <button type="submit" class="btn btn-link">Borrar</button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table> 
      {!! $datos->render()!!}

  </div>
  <div class="col-sm-4">
    mensaje
  </div>
@endsection
