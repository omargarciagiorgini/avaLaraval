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