<span data-ng-controller="MainController">
    @yield('homeContent')
    @yield('angular_controller')
        <div class="col l12 m12 s12">
            <div>
                <h1>
                    @yield('title')
                </h1>
                <div class="row">
                    <div class="col l4 m4 s4 left-align">
                        <div class="row">
                            <div class="right-align">
                                @yield('button_delete')
                            </div>
                            <div class="left-align">
                                @yield('buttons')
                            </div>
                        </div>
                    </div>
                    <div class="col l8 m8 s8 right-align">
                        @yield('filters')
                    </div>
                </div>
            </div>
            <br/>
            <div class="col l12">
                @yield('body_page')
            </div>
        </div>
    @yield('end_angular_controller')
</span>