
<table class="table table-bordered" >
  <thead>
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>    
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td> <a href="{{route('users.edit', ['id'=>$user->id)}}"  data-toggle="modal" data-target="#user_edit{{ $user->id}}" class="btn btn-primary btn-sm" >Editar</a> </td>  
    </tr>

        <div class="modal fade" id="user_edit{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="user_edit_title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content"></div>
            </div>
        </div>
    @endforeach
  </tbody>


</table>

  {!! $users->render() !!}
