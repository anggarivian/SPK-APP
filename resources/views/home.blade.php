@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">{{__('Dashboard')}}</div>
        <div class="card-body">
            <p class="mb-0">You are logged in!</p>
        </div>
    </div>
@stop
