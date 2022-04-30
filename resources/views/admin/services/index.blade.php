Отображаются все виды работ
@extends('layouts.simple.master')
@section('title', 'Ajax DataTables')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection



@section('content')
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>Вид работ</tr>
        <tr>Коэффициент</tr>
        <tr>Категория</tr>
        <tr>Действие</tr>
        </thead>
        <tbody>
        @forelse($services as $service)
            <tr>

                <td>{{$service->title}}</td>
                <td>{{$service->coefficient}}</td>
                <td>{{$service->tech_service_types_id}}</td>
                <td>
                    <a href="#">Редактирование</a>
                    <a href="javascript:;">Удаление</a>
                </td>
            </tr>
        @empty
            <tr><td colspan="4">Записей нет</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
