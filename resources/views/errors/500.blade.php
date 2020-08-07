@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))
<!-- 
La mayoría de las veces este error se debe a un archivo .htaccess mal configurado ya que como
bien sabemos este archivo puede cambiar la configuración del sitio lo que puede generar conflictos
si no se hace de la manera correcta.

Otro causante es la versión de PHP, theme o plugins que utilizamos no sea compatible con nuestra
 versión de php actual.
-->