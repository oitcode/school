@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-md-8">

      @if (false)
        @livewire ('fees-component')
        @livewire ('contact-message-component')
        @livewire ('notice-component')
        @livewire ('vacancy-component')
        @livewire ('admission-application-component')
        @livewire ('school-component')

        @livewire ('fees-structure-component')
      @livewire ('section-component')
      @endif

      @livewire ('academic-session-display', ['academicSession' => $academicSession,])

    </div>
    <div class="col-md-4">
    </div>
  </div>
@stop
