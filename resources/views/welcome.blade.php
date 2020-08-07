@extends('layouts.app')
@auth
    @section('content')
    <div class="container">
        @if(Auth::User()->rol=='admin')
            <div class="card-group">
                <div class="card" style="width: 18rem;">
                    <img src="https://us.as.com/us/imagenes/2020/04/03/tikitakas/1585865609_994224_1585865897_noticia_normal.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Gestión de escuelas</h5>
                      <p class="card-text">Aquí están todas las escuelas registradas y puedes editarlas, borrarlas y agregar nuevas escuelas</p>
                      <a href="{{route('escuelas.index') }}" class="btn btn-primary">Escuelas</a>
                    </div>
                </div>

                <h1>&nbsp</h1>

                <div class="card" style="width: 18rem;">
                    <img src="https://www.interware.com.mx/hs-fs/hubfs/crear-buyer-persona.jpg?width=900&name=crear-buyer-persona.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Gestión de usuarios</h5>
                      <p class="card-text">Aquí se encuentran todos los usuarios registrados y puedes modificar sus roles y borrarlos del sistema</p>
                      <a href="{{route('Usuarios.index') }}" class="btn btn-primary">Usuarios</a>
                    </div>
                </div>

                <h1>&nbsp</h1>

                <div class="card" style="width: 18rem;">
                    <img src="https://www.minedu.gob.pe/superiorpedagogica/wp-content/uploads/2019/11/docentes_capa01.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gestión de docentes</h5>
                        <p class="card-text">Administra todos los docentes registrados en el sistema, modifica sus registros e ingresa nuevos docentes</p>
                        <a href="{{route('Docentes.index') }}" class="btn btn-primary">Docentes</a>
                    </div>
                </div>

                <h1>&nbsp</h1>

                <div class="card" style="width: 18rem;">
                    <img src="https://img2.freepng.es/20180227/zww/kisspng-medal-badge-logo-golden-atmosphere-medal-5a9535512a5913.4069403415197279531735.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Órdenes de mérito</h5>
                      <p class="card-text">Se encuentran todas las órdenes de mérito cargadas, puedes agregar nuevas o borrar existentes</p>
                      <a href="{{route('orden.index') }}" class="btn btn-primary">Orden de mérito</a>
                    </div>
                </div>

                <h1>&nbsp</h1>
                
                <div class="card" style="width: 18rem;">
                        <img src="https://blog.hotmart.com/blog/2019/09/BLOG_como-fazer-relatorio-de-gestao-670x419.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Informes</h5>
                          <p class="card-text">Aquí hay datos relevantes sobre la información almacenada en el sistema</p>
                          <a href="{{route('informes.index') }}" class="btn btn-primary">Informes</a>
                        </div>
                    </div>

                <h1>&nbsp</h1> 

            </div>   
        @else
            @if(!empty(Auth::User()->id_escuela))
                {!!redirect()->route('escuelas.show',Auth::User()->id_escuela)!!}
            @else
                <h1>Solicite una escuela para ser asignado</h1>
            @endif
        @endif    
    </div>
    @endsection
@endif