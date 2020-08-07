@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __($exception->getMessage() ?: 'Service Unavailable'))
<!--
Un error de servicio no disponible 503 es un código de estado de respuesta HTTP que indica que
un servidor no puede manejar temporalmente la solicitud. Esto puede deberse a que el servidor 
está sobrecargado o caído por mantenimiento.
-->