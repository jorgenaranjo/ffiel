<div class="row">
    <div class="col s12 m6 l6" data-dir-paginate="workshop in workshops | orderBy:sortKey:reverse | filter:searchInput |itemsPerPage:8">
        <div class="card large">

            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator img-responsive" ng-src="@{{ imageMIME(workshop.image) }}" alt="@{{ workshop.name }}">
            </div>
            <div class="card-content">
                <h4 class="activator grey-text text-darken-4">@{{ workshop.name }}<i class="material-icons right">more_vert</i></h4>
                <div class="row">
                    <div class="col s3 m3 l2">
                        <img class="activator img-responsive circle" ng-src="@{{ imageMIME(workshop.speaker_image) }}" alt="@{{ workshop.name }}"
                             style="max-width: 70px; max-height: 70px">
                    </div>
                    <div class="col s9 m9 l10">
                        <h5 style="color: #F4842B;">@{{ workshop.speaker_name }}</h5>
                        <h6 style="color: #68266D;">@{{ workshop.speaker_occupation }}</h6>
                    </div>
                </div>
            </div>
            <div class="card-action center">
                <a data-ng-click="paymentModal(workshop)" class="waves-effect waves-light btn orange darken-2"><i class="material-icons">camera</i> Inscribete</a>
            </div>
            <div class="card-reveal">
                <h4 class="grey-text text-darken-4">@{{ workshop.name }}<i class="material-icons right">close</i></h4>
                <div class="row">
                    <div class="col s3 m3 l2">
                        <img class="activator img-responsive circle" ng-src="@{{ imageMIME(workshop.speaker_image) }}" alt="@{{ workshop.name }}"
                             style="max-width: 60px; max-height: 60px">
                    </div>
                    <div class="col s9 m9 l10">
                        <h5 style="color: #F4842B;">@{{ workshop.speaker_name }}</h5>
                        <h6 style="color: #68266D;">@{{ workshop.speaker_occupation }}</h6>
                    </div>
                </div>
                <div class="row">
                    <table class="centered">
                        <thead>
                        <tr>
                            <th width="33.3%"><i class="material-icons">person</i>{{ trans('workshop.quantity') }}</th>
                            <th width="33.3%"><i class="material-icons">date_range</i>{{ trans('workshop.startDate') }}</th>
                            <th width="33.3%"><i class="material-icons">date_range</i>{{ trans('workshop.endDate') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>@{{ workshop.quantity }}</td>
                            <td>@{{ workshop.startDate }}</td>
                            <td>@{{ workshop.endDate }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <p>@{{ workshop.description }}</p>
            </div>
        </div>
    </div>
</div>
