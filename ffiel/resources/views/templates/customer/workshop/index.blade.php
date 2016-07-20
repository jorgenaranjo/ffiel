@extends('layouts.generals.main_template')
@section('page_title')
    {{ trans('workshop.title') }}
@endsection

@section('title')
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

@endsection

@section('body_page')
    <div class="row">
        <div class="center">
            <dir-pagination-controls
                    max-size="15"
                    direction-links="true"
                    boundary-links="true" >
            </dir-pagination-controls>
        </div>
        @include('templates.customer.workshop.partials.cards')
        <div class="center">
            <dir-pagination-controls
                    max-size="15"
                    direction-links="true"
                    boundary-links="true" >
            </dir-pagination-controls>
        </div>
    </div>
    @include('templates.customer.workshop.partials.selectPaymentMethodModal')
@endsection