@extends('layouts.app')

@section('title', 'Ninjer')

{{-- Header session --}}
@section('header')
    @parent
    @include('components.header')
@stop

{{-- Sidebar session --}}
@section('sidebar')
    @parent
    @include('components.sidebar')
@stop

{{-- Content body session --}}
@section('content')

@stop
