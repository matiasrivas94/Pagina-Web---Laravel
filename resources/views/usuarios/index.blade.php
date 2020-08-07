@extends('layouts.app')
@auth
    @section('content')
        @if(Auth::User()->rol=='admin')
        <div class="container">
            <div class="container">  
                <table class="table table-striped">
                    <tr>
                        <th>Nombre de Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>E-mail</th>
                        <th>Rol</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                    @foreach ($users as $user)
                        @if($user!=Auth::User())
                            <tr>
                                <td>{{$user->Nick}}</td>
                                <td>{{$user->nombre}}</td>
                                <td>{{$user->apellido}} </td>
                                <td>{{$user->email}} </td>                        
                                <td>{{$user->rol}} </td>

                                <td><a class="btn btn-link" href="{{route('Usuarios.edit',$user->id) }}" ><img width="20" height="20" src="https://icon-icons.com/icons2/523/PNG/128/edit_icon-icons.com_52382.png" alt="Editar"></a></td>                            
                                <td><a class="btn btn-link" href="{{route('Usuarios.destroy',$user->id) }}" ><img width="20" height="20" src="https://icon-icons.com/icons2/10/PNG/128/cancel_stop_exit_1583.png" alt="Borrar"></a></td>
                            </tr>
                        @else
                            <tr>
                                <td>{{$user->Nick}}</td>
                                <td>{{$user->nombre}}</td>
                                <td>{{$user->apellido}} </td>
                                <td>{{$user->email}} </td>                        
                                <td>{{$user->rol}} </td>        
                            </tr>
                         @endif           
                    @endforeach
                </table>
            </div>
        </div>
        @else
            <h1>Solicite una escuela para ser asignado</h1>
        @endif
    @endsection
@endif