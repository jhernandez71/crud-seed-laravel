@extends('layouts.app')

@section('content')
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Mis Tareas</h3>
          </div>
          <div class="panel-body">
            <a href="{{Route('tasks.create')}}" class="btn btn-primary btn-sm">Nuevo</a>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <th>Completada</th>
                  <th>Tarea</th>
                  <th>Acciones</th>
                </thead>
                <tbody>
                  @foreach ($tasks as $task)
                    <tr>
                      <td>...</td>
                      <td>{{$task->name}}</td>
                      <td>
                        <a href="{{route('tasks.edit',$task->id)}}" onclick="return confirm('Esta Seguro de Eliminar el Registro?')" class="btn btn-success btn-sm">
                          Editar
                        </a>
                        <a href="{{route('tasks.destroy',$task->id)}}" onclick="return confirm('Esta Seguro de Eliminar el Registro?')" class="btn btn-danger btn-sm">
                          Borrar
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection
