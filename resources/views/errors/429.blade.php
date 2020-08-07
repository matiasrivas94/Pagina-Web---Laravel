@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Too Many Requests'))
<!--
Se produce este error cuando ha enviado demasiadas solicitudes en un período de tiempo determinado.
 Algunos servidores tienen seguridad para detenerse cuando los números de solicitud superan un cierto 
 límite en un cierto período de tiempo.
 -->