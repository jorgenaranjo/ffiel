<span data-ng-controller="MainController">
    @yield('angular_controller')
        <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
            <div>
                <h1>
                    @yield('title')
                </h1>
                <div class="row" style="margin-left: 3px">
                    <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4 pull-left">
                        <div class="row">
                            <div class="pull-right">
                                @yield('button_delete')
                            </div>
                            <div class="pull-left">
                                @yield('buttons')
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xs-8 col-md-8 col-sm-8 pull-right">
                        @yield('filters')
                    </div>
                </div>
            </div>
            <br/>
            <div class="col-lg-12">
                @yield('body_page')
            </div>
        </div>
    @yield('end_angular_controller')
</span>