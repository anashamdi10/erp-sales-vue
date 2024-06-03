@extends('layouts.admin')

@section('title')

الرئيسية

@endsection
@section('contentheader')

<h1>الرئيسية</h1>

@endsection
@section('contentheaderlink')

<a href="{{route('admin.dashboard')}}">الرئيسية</a>

@endsection
@section('contentheaderactive')

عرض

@endsection



@section('content')

<!-- <app-component /> -->



<div class="row" style="background-image: url({{asset('admin/dist/img/dash.jpg')}}); background-size:cover;min-height:600px; background-repeat:no-repeat"> </div>

@endsection @vite('resources/js/app.js')