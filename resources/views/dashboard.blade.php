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
            {{ $school->name }}
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
            @if ($academicSession != null)
              {{ $academicSession->name }}
            @else
              No data
            @endif
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
            @if ($academicSession != null)
              {{ $academicSession->getTotalStudents() }}
            @else
              No data
            @endif
          </div>

          <div>
            <span class="badge badge-danger">Total</span>
          </div>

        </div>
      </div>
    </div>

  </div>

  @if (false)
  <div class="row">
    <div class="col-md-6">
      @livewire ('chart-o-class-student')
    </div>
  </div>
  @endif

  @livewire ('user-create')

  <div class="card card-outline card-info">
    <div class="card-body">
      <p class="text-secondary">
        OSchool | &copy; Operating IT Pvt Ltd
      </p>
    </div>
  </div>


  <div class="row">
    <div class="col-md-8">

      @if (false)
        @livewire ('named-sms')

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
