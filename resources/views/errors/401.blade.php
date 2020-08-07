@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))

<!-- 
Este mensaje de error significa que el sitio o recurso solicitado desde el navegador requiere que 
iniciemos sesión con un usuario y contraseña y que, o bien no se han facilitado,
 que los datos introducidos no son correctos o que el usuario ha sido eliminado o bloqueado, entre otros.
 -->