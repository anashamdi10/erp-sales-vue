@extends('layouts.admin')

@section('title')

الضبط العام

@endsection
@section('contentheader')

الضبط

@endsection
@section('contentheaderlink')

<a href="{{route ('admin.adminPanelSetting.index')}}">الضبط</a>

@endsection
@section('contentheaderactive')

عرض

@endsection



@section('content')

<company-settings></company-settings>

    @endsection

    @vite('resources/js/app.js')