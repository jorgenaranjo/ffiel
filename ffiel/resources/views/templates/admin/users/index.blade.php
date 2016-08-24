@extends('layouts.generals.main_template')
@section('page_title')
    {{ trans('workshop.title') }}
@endsection

@section('title')
    <i class="material-icons left medium">camera</i> {{ trans('workshop.title') }}
@endsection

@section('angular_controller')
@endsection

@section('end_angular_controller')
@endsection

@section('filters')
@endsection

@section('button_delete')
@endsection

@section('buttons')
@endsection

@section('body_page')
    <div class="row">
        @include('templates.admin.users.partials.table')
    </div>
    <div class="center">
        {!! $users->render() !!}
    </div>
@endsection