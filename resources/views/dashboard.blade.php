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

        @livewire ('fees-structure-component')
        @livewire ('academic-session-display', ['academicSession' => $academicSession,])
        @livewire ('section-component')
      @endif

      @livewire ('sms-credit-component')


      @if (false)
      <div class="card">
        <div class="card-header border-0">
          <h2 class="card-title">
            Session 2078
          </h2>
        </div>
        <div class="card-body">

          <div class="row">

            <div class="col-md-3">
              <div class="card text-white bg-primary">
                <div class="card-header">
                  <h3 class="card-title">
                    Classes
                  </h3>
                </div>
                <div class="card-body h1">
                  {{ $academicSession->getTotalClasses() }}
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card text-white bg-success">
                <div class="card-header">
                  <h3 class="card-title">
                    Sections
                  </h3>
                </div>
                <div class="card-body h1">
                  {{ $academicSession->getTotalSections() }}
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card text-white bg-info">
                <div class="card-header">
                  <h3 class="card-title">
                    Student
                  </h3>
                </div>
                <div class="card-body h1">
                  {{ $academicSession->getTotalStudents() }}
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card text-white bg-warning">
                <div class="card-header">
                  <h3 class="card-title">
                    Teachers
                  </h3>
                </div>
                <div class="card-body h1">
                  {{ count($teachers) }}
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
      @endif



    </div>

    <div class="col-md-4">
        @livewire ('school-component')
    </div>
  </div>
@stop
