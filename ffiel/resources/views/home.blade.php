@extends('layouts.app')

@section('content')
    <div class="col-lg-offset-3 col-md-offset-2 col-lg-6 col-md-8 col-sm-12 col-xs-12 text-center">
        <div class="column">
            <div class="header">
                <h1 class="ui header">
                    Hello {{ Auth::user()->name }}
                </h1>
            </div>
            <div class="image content">
                <div class="ui medium image centered">
                    <img src="http://placehold.it/300x300">
                </div>
                <div class="description centered">
                    <div class="ui header">We've auto-chosen a profile image for you.</div>
                    <p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
                    <p>Is it okay to use this photo?</p>
                </div>
            </div>
        </div>
    </div>
@endsection