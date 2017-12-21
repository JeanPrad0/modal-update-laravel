<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 id='user_edit_title' class="modal-title">Editando Registro</h4>
</div>
<div class="modal-body">

  {!! Form::model($users, ['route'=>['users.update', $users->id],'files' => true])  !!}

  <div class="form-group" >
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
  </div>

  <div class="form-group" >

    {!! Form::submit('Atualizar', ['class'=>'btn btn-primary']) !!}
  </div>

  {!! Form::close()  !!}
</div>

  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

  </div>