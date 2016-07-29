@extends('layouts.generals.main_template')
@section('page_title')
    {{ trans('workshop.create') }}
@endsection

@section('title')
    <i class="material-icons left medium">camera</i> {{ trans('workshop.create') }}
@endsection

@section('angular_controller')
    <div data-ng-controller="WorkshopsController as workshops">
@endsection

@section('end_angular_controller')
    </div>
@endsection

@section('filters')
@endsection

@section('button_delete')
@endsection

@section('buttons')
	@include('templates.admin.workshop.partials.inputs')
@endsection

@section('body_page')
    <div class="row">
        @include('templates.admin.workshop.partials.form_create')
    </div>
@endsection