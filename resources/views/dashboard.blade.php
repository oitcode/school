@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-md-8">
      @livewire ('notice-component')
      @livewire ('todo-component')
    </div>
    <div class="col-md-4">
      @livewire ('school-component')
    </div>
  </div>
@stop
