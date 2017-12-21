<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 id='client_edit_title' class="modal-title">Editando Registro</h4>
</div>
<div class="modal-body">

  {!! Form::model($mclient, ['route'=>['admin.modules.clients.update', $mclient->id],'files' => true])  !!}

  <div class="form-group" >
    {!! Form::label('Type', 'Tipo:') !!}
    {!! Form::select('type', ['Imagem', 'Arquivos'],null, ['class'=>'form-control', 'disabled']) !!}
  </div>

  @include('admin.modules.clients._form')
  <div class="form-group" >
    {!! Form::hidden('client_id',null) !!}
  </div>
  <div class="form-group" >

    {!! Form::submit('Atualizar', ['class'=>'btn btn-primary']) !!}
  </div>

  {!! Form::close()  !!}
</div>

  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

  </div>