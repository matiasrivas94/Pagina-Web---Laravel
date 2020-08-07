@extends('errors::minimal')

@section('title', __('Page Expired'))
@section('code', '419')
@section('message', __('Page Expired'))
<!--
Esto ocurre debido a una falla de verificación de token CSRF, caché mal configurado,
permisos, configuración de sesión incorrecta, etc.
 -->