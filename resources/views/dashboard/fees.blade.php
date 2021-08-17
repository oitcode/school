@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
  @livewire('fees-component')
  @livewire('fees-structure-component')
@stop
