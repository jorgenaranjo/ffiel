<!DOCTYPE html>
<html lang="es" data-ng-app="FFIEL" ng-cloak>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

@include('layouts.generals.headers')
<style>
    .modal-backdrop {
        z-index: 250;
    }
</style>
<body>
    {!! csrf_field() !!}
    @if (! Auth::guest())
        <main>
            <div class="row">
                @include('layouts.generals.menu.general_menu')
            </div>
            @include('layouts.generals.errors')
            @include('layouts.generals.sessionMessage')
            <div class="row">
                <div class="col l12">
                    @include('layouts.generals.content_template')
                </div>
            </div>
        </main>
        <div class="row">
            @include('layouts.generals.footer')
        </div>
    @endif
    @include('layouts.generals.scripts')
</body>
</html>