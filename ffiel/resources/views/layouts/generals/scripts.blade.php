{{--
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
--}}
<script src="{{ asset('materialize/js/materialize.min.js') }}"></script>

<script src="{{ asset('bower_components/angular/angular.js') }}"></script>
<script src="{{ asset('js/scripts/lib/angular-resource.js') }}"></script>
<script src="{{ asset('js/scripts/lib/angular-route.min.js') }}"></script>
<script src="{{ asset('js/scripts/lib/angular-animate.min.js') }}"></script>
<script src="{{ asset('bower_components/angular-advanced-searchbox/dist/angular-advanced-searchbox-tpls.min.js') }}"></script>
<script src="{{ asset('bower_components/angularUtils-pagination/dirPagination.js') }}"></script>
<script src="{{ asset('bower_components/angular-ui-notification/dist/angular-ui-notification.min.js') }}"></script>
<script src="{{ asset('bower_components/angular-base64-upload/dist/angular-base64-upload.js') }}"></script>
<script src="{{ asset('bower_components/angular-sanitize/angular-sanitize.js') }}"></script>


<!-- Angular Base -->
<script src="{{ asset('js/scripts/app.js') }}"></script>
<script src="{{ asset('js/scripts/controllers/main/mainController.js') }}"></script>
<script src="{{ asset('js/scripts/services/main/mainFactories.js') }}"></script>
<script src="{{ asset('js/scripts/filters/filters.js') }}"></script>
<script src="{{ asset('js/scripts/directives/directives.js') }}"></script>


<!-- If is Admin -->
@if(Auth::user()->type == 'admin')
    <!-- Factories -->
    <script src="{{ asset('js/scripts/services/workshop/workshopAdminServices.js') }}"></script>
    <!-- Controllers -->
    <script src="{{ asset('js/scripts/controllers/workshop/workshopAdminController.js') }}"></script>
    <!-- CkEditor -->
    <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>

@endif

<!-- If is Customer -->
@if(Auth::user()->type == 'customer')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <!-- Factories -->
    <script src="{{ asset('js/scripts/services/workshop/workshopCustomerServices.js') }}"></script>
    <script src="{{ asset('js/scripts/services/paypal/paypalServices.js') }}"></script>
    <!-- Controllers -->
    <script src="{{ asset('js/scripts/controllers/workshop/workshopCustomerController.js') }}"></script>
    <!-- EXtras -->


@endif


<script>
    $(document).ready(function() {
        $('select').material_select();
        $(".button-collapse").sideNav();
        $('.slider').slider({height: 700});
    });
</script>

@yield('extra_js')

