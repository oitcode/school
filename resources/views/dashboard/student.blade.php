@extends('adminlte::page')

@section('title', 'Dashboard')

@if (false)
@section('content_header')
    <h1>Student</h1>
@stop
@endif

@section('content')
  @livewire('student-component')
@stop
