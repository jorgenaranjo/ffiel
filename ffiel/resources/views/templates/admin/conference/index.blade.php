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
    <a class="waves-effect light-green btn" href="{{ route('conferences.create') }}"><i class="material-icons left">playlist_add</i>{{ trans('conference.create') }}</a>
@endsection

@section('body_page')
    <div class="row">
        @include('templates.admin.conference.partials.table')
        <div class="center">
            <dir-pagination-controls
                    max-size="15"
                    direction-links="true"
                    boundary-links="true" >
            </dir-pagination-controls>
        </div>
        @include('templates.admin.conference.partials.delete')
        @include('templates.admin.conference.partials.edit')
    </div>
@endsection