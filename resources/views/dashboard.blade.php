@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-md-8">
      @livewire ('contact-message-component')
      @livewire ('notice-component')
      @livewire ('vacancy-component')
      @livewire ('admission-application-component')
      @livewire ('fees-structure-component')
    </div>
    <div class="col-md-4">
      @livewire ('school-component')
      @livewire ('fees-component')
    </div>
  </div>
@stop
