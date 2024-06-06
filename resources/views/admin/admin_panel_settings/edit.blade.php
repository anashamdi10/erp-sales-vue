@extends('layouts.admin')

@section('title')

تعديل الضبط العام 

@endsection
@section('contentheader')

الضبط

@endsection
@section('contentheaderlink')

<a href="{{route ('admin.adminPanelSetting.index')}}">الضبط</a>

@endsection
@section('contentheaderactive')

تعديل 

@endsection



@section('content')

<company-settings-edit></company-settings-edit>

    @endsection

    @vite('resources/js/app.js')