@extends('layouts.app')

@section('content')
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Crear Nueva Tarea</h3>
          </div>
          @include('partials/errors')
          <div class="panel-body">
            <form action="{{route('tasks.store')}}" method="POST">
              {{csrf_field()}}
              <div class="form-group">
                <label>Tarea</label>
                <input type="text" name="name" class="form-control" required value="{{old('name')}}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Agregar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
@endsection
