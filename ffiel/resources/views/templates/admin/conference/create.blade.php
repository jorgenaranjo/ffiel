@extends('layouts.generals.main_template')
@section('page_title')
    {{ trans('conference.title') }}
@endsection

@section('title')
    <i class="material-icons left medium">record_voice_over</i> {{ trans('conference.title') }}
@endsection

@section('angular_controller')
    <div data-ng-controller="ConferencesAdminController as conferences">
@endsection

@section('end_angular_controller')
    </div>
@endsection

@section('filters')
@endsection

@section('button_delete')
@endsection

@section('buttons')
    @include('templates.admin.conference.partials.inputs')
@endsection

@section('body_page')
    <div class="row">
        @include('templates.admin.conference.partials.create')
    </div>
@endsection