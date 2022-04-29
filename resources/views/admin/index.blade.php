Админка
@extends('layouts.simple.master')
@section('title', 'Ajax DataTables')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection



@section('content')
<h2><a href="{{ route('admin.tech_service.index') }}">Категории работ</a></h2>
<br>
<h2><a href="{{ route('admin.services.index') }}">Виды работ</a></h2>
@endsection
