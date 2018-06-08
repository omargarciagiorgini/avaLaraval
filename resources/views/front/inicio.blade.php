@extends('layout')
@extends('navbar')

@section('contenido')
<table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Short</th>
        <th> </th>
        <th> </th>
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
@endsection