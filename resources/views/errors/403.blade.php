@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
<!--
 Acceso denegado o Prohibido.
 Básicamente estás tratando de ingresar a una dirección o un sitio web a los que está prohibido acceder.
 -->