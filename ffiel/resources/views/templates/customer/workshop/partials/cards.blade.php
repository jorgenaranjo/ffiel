<div class="row">
    <div class="col s12 m12 l6" data-dir-paginate="workshop in workshops | orderBy:sortKey:reverse | filter:searchInput |itemsPerPage:8">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" ng-src="@{{ workshop.image }}" alt="@{{ workshop.name }}">
            </div>
            <div class="card-content">
                <div class="row">
                    <div class="row">
                        <div class="col s4">
                            <div class="center promo promo-example">
                                <i class="material-icons">date_range</i>
                                <p class="promo-caption">{{ trans('workshop.date') }}</p>
                                <p class="light center">@{{ workshop.startDate }} @{{ workshop.hours }}</p>
                                <p class="light center">@{{ workshop.endDate }} @{{ workshop.hours }}</p>
                            </div>
                        </div>
                        <div class="col s4">
                            <div class="center promo promo-example">
                                <i class="material-icons">person</i>
                                <p class="promo-caption">{{ trans('workshop.quantity') }}</p>
                                <p class="light center">@{{ workshop.quantity }}</p>
                            </div>
                        </div>
                        <div class="col s4">
                            <div class="center promo promo-example">
                                <p class="promo-caption">{{ trans('workshop.price') }}</p>
                                <h3 class="light center" style="color: #68266D;">$ @{{ workshop.price }}</h3>
                            </div>
                        </div>
                    </div>
                    <h6 class="activator right-align" style="color: #F4842B;">M&aacute;s informaci&oacute;n<i class="material-icons right">more_vert</i></h6>
                </div>
            </div>
            <div class="card-action center">
                <a data-ng-click="paymentModal(workshop)" class="waves-effect waves-light btn orange darken-2"><i class="material-icons">camera</i> Inscribete</a>
            </div>
            <div class="card-reveal">
                <h4 class="card-title grey-text text-darken-4"><span ng-bind-html='toTrustedHTML( workshop.name )'></span><i class="material-icons right">close</i></h4>
                <div class="row">
                    <div class="col s3 m3 l2">
                        <img class="activator img-responsive circle" ng-src="@{{ workshop.speaker_image }}" alt="@{{ workshop.name }}"
                             style="max-width: 60px; max-height: 60px">
                    </div>
                    <div class="col s9 m9 l10">
                        <h5 style="color: #F4842B;"><span ng-bind-html='toTrustedHTML( workshop.speaker_name )'></span></h5>
                        <h6 style="color: #68266D;"><span ng-bind-html='toTrustedHTML( workshop.speaker_occupation )'></span></h6>
                    </div>
                </div>
                <div class="row">
                    <table class="centered">
                        <thead>
                        <tr>
                            <th width="50%"><i class="material-icons">date_range</i>{{ trans('workshop.date') }}</th>
                            <th width="30%"><i class="material-icons">person</i>{{ trans('workshop.quantity') }}</th>
                            <th width="20%"><i class="material-icons">date_range</i>{{ trans('workshop.price') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <p>@{{ workshop.startDate }} @{{ workshop.hours }}</p>
                                <p>@{{ workshop.endDate }} @{{ workshop.hours }}</p>
                            </td>
                            <td>@{{ workshop.quantity }}</td>
                            <td>$ @{{ workshop.price }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <p class="text-justify"><span ng-bind-html='toTrustedHTML( workshop.description )'></span></p>
                </div>
            </div>
        </div>
    </div>
</div>
