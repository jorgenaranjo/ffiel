@extends('layouts.generals.main_template')

@section('page_title')
    {{ trans('home.title') }}
@endsection

@section('homeContent')
    <div class="row">
        <div class="center">
            <h3> {{ trans('home.title') .' '.Auth::user()->name}} </h3>
            <br>
            <div class="col l10 m10 s12 push-l1 push-m1">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="{{ asset("/images/SLIDER/1.png") }}"> <!-- random image -->
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/2.jpg") }}"> <!-- random image -->
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/3.jpg") }}"> <!-- random image -->
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/4.jpg") }}"> <!-- random image -->
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/5.jpg") }}"> <!-- random image -->
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/6.jpg") }}"> <!-- random image -->
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/7.png") }}"> <!-- random image -->
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/8.jpg") }}"> <!-- random image -->
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/9.jpg") }}"> <!-- random image -->
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/10.jpg") }}"> <!-- random image -->
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/11.jpg") }}"> <!-- random image -->
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/12.jpg") }}"> <!-- random image -->
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/13.jpg") }}"> <!-- random image -->
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/14.png") }}"> <!-- random image -->
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/15.jpg") }}"> <!-- random image -->
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/16.png") }}"> <!-- random image -->
                        </li>
                        <li>
                            <img src="{{ asset("/images/SLIDER/17.png") }}"> <!-- random image -->
                        </li>
                        {{--<li>
                            <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
                            <div class="caption center-align">
                                <h3>This is our big Tagline!</h3>
                                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                            </div>
                        </li>--}}
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection