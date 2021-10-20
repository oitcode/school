@extends('adminlte::page')

@section('title', 'Dashboard')

@if (false)
@section('content_header')
    <h1>Academic Session</h1>
@stop
@endif

@section('content')
  @livewire('academic-session-component')
@stop
