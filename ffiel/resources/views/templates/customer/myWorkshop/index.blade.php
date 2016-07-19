@extends('layouts.generals.main_template')
@section('page_title')
    {{ trans('workshop.title') }}
@endsection

@section('title')
@endsection

@section('angular_controller')
    <div data-ng-controller="MyWorkshopsController as workshops">
@endsection

@section('end_angular_controller')
    </div>
@endsection

@section('filters')
@endsection

@section('button_delete')
@endsection

@section('buttons')

@endsection

@section('body_page')
    <div class="row">
        <h3><i class="material-icons left medium">assignment</i> Mis talleres</h3>
        @include('templates.customer.myWorkshop.partials.table')
        <div class="center">
            <dir-pagination-controls
                    max-size="15"
                    direction-links="true"
                    boundary-links="true" >
            </dir-pagination-controls>
        </div>
    </div>
@endsection