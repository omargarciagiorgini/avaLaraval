@extends('layout')
@extends('navbar')

@section('contenido')

<h3> show </h3>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="email" class="form-control" id="exampleInputEmail1" 
                value="{{$datos->name}}" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
  <label for="exampleFormControlTextarea1">
    Descripcion Breve
    </label>
  <input type="email" class="form-control" id="exampleInputEmail1"  
        value="{{$datos->short}}" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">
    Descripcion Completa
    </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">
              {{$datos->body}}
    </textarea>
  </div>
  <div class="form-group">
          <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
@endsection