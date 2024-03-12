@extends('layouts.app')

@section('content')

 <h1>Vista Cursos</h1>
   <a href="{{route('cursos.create')}}" class="btn btn-success">Nuevo Curso</a>
   <div class="container">
 <table class='table'><br>
    <tr>
        <th>#</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Grupo</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>

    @foreach($cursos as $c)
    <tr>
        <th>{{ $loop->iteration }}</th>
        <th>{{ $c->cur_titulo }}</th>
        <th>{{ $c->cur_descripcion }}</th>
        <th>{{ $c->cur_grupo }}</th>
        <th>{{ $c->cur_estado==1?'Activo':'Inactivo' }}</th>
        <td>
          <a href="{{ (route('cursos.edit',$c->cur_id)) }}" class="btn btn-info btn-sm">Editar</a>

          <form action="{{route('cursos.destroy',$c->cur_id)}}" method="POST" onsubmit="return confirm('Desea eliminar??')">
          @csrf
          <button type="submit" class="btn btn-danger">Eliminiar</button>

          </form>
        </td>
    </tr>
    @endforeach
 </table>
 </div>
@endsection