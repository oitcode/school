@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
  <div class="row">

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">

          <div class="text-secondary">
            <div class="float-left">
              SCHOOL
            </div>
            <div class="float-right">
              <i class="fas fa-school fa-2x"></i>
            </div>
            <div class="clearfix">
            </div>
          </div>

          <div class="h3">
            SNJES
          </div>

          <div>
            <span class="badge badge-primary">School</span>
          </div>

        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">

          <div class="text-secondary">
            <div class="float-left">
              SESSION
            </div>
            <div class="float-right">
              <i class="fas fa-calendar fa-2x"></i>
            </div>
            <div class="clearfix">
            </div>
          </div>

          <div class="h3">
            2078
          </div>

          <div>
            <span class="badge badge-success">Current</span>
          </div>

        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">

          <div class="text-secondary">
            <div class="float-left">
              STUDENTS
            </div>
            <div class="float-right">
              <i class="fas fa-user-graduate fa-2x"></i>
            </div>
            <div class="clearfix">
            </div>
          </div>

          <div class="h3">
            2213
          </div>

          <div>
            <span class="badge badge-danger">Total</span>
          </div>

        </div>
      </div>
    </div>


  </div>

  <div class="row">
    <div class="col-md-8">

      @if (false)
        @livewire ('fees-component')
        @livewire ('contact-message-component')
        @livewire ('notice-component')
        @livewire ('vacancy-component')
        @livewire ('admission-application-component')

        @livewire ('fees-structure-component')
        @livewire ('academic-session-display', ['academicSession' => $academicSession,])
        @livewire ('section-component')
        @livewire ('sms-credit-component')
      @endif
    </div>

    <div class="col-md-4">
        @if (false)
        @livewire ('school-component')
        @endif
    </div>
  </div>
@stop
