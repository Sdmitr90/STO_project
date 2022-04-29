@extends('layouts.simple.master')
@section('title', 'Ajax DataTables')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection



@section('content')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>#ID</tr>
            <tr>Название категории</tr>
            <tr>Действия</tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{$category->title}}</td>
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

@section('script')
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
{{--    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>--}}
    <script src="{{ asset('assets/js/custom.js') }}"></script>
@endsection
