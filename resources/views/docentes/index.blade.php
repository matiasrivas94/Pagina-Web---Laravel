@extends('layouts.app')
@auth
    @section('content')
        @if(Auth::User()->rol=='admin')
        <div class="container">
            <table class="table table-striped">
                <tr>
                    <th>Nombre</th><th>Apellido</th><th>Sexo</th><th>CUIL</th>
                    <th>Titulo</th><th>Categoria del Titulo</th><th>Localidad</th><th>Editar</th><th>Borrar</th>
                </tr>

                @foreach ($docentes as $docente)
                    <tr>
                        <td>{{$docente->Nombre}}</td>
                        <td>{{$docente->Apellido}}</td>
                        <td>{{$docente->Sexo}} </td>
                        <td>{{$docente->CUIL}} </td>
                        <td>{{$docente->Titulo}} </td>
                        <td>{{$docente->CategoriaTitulo}} </td>
                        <td>{{$docente->localidad->Nombre}} </td>
                                                
                        <td><a class="btn btn-link" href="{{route('Docentes.edit',$docente->id) }}" ><img width="20" height="20" src="https://icon-icons.com/icons2/523/PNG/128/edit_icon-icons.com_52382.png" alt="Editar"></a></td>
                        <td><a class="btn btn-link" href="{{route('Docentes.destroy',$docente->id) }}" ><img width="20" height="20" src="https://icon-icons.com/icons2/10/PNG/128/cancel_stop_exit_1583.png" alt="Borrar"></a></td>
                    </tr>
                @endforeach
            </table>
                {!!$docentes->render()!!}
            <a class="btn btn-success" href="{{route('Docentes.create') }}">Agregar docente</a>
        </div>
        @else
            <h1>Solicite una escuela para ser asignado</h1>
        @endif
    @endsection
@endif