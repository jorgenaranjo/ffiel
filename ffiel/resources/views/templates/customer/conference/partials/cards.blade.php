<div class="row">
    <div class="col s12 m12 l6" ng-repeat="conference in conferences">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator img-responsive" ng-src="@{{ imageMIME(conference.image) }}"  alt="@{{ conference.name }}"
                     style="max-width: 700px; max-height: 400px;">
            </div>
            <div class="card-content">
                <div class="row">
                    <div class="row">
                        <div class="col s12 m8 l8">
                            <div class="center promo promo-example">
                                <h4>@{{ conference.name }}</h4>
                            </div>
                        </div>
                        <div class="col s12 m4 l4">
                            <div class="center promo promo-example">
                                <i class="material-icons">date_range</i>
                                <p class="promo-caption">{{ trans('conference.date') }}</p>
                                <p class="light center"><b>@{{ conference.startDate }}</b></p>
                            </div>
                        </div>
                    </div>
                    <h6 class="activator right-align" style="color: #F4842B;">M&aacute;s informaci&oacute;n<i class="material-icons right">more_vert</i></h6>
                </div>
            </div>
            <div class="card-action center">
                <a data-ng-click="" class="waves-effect waves-light btn orange darken-2"><i class="material-icons">camera</i> Asistiré</a>
            </div>
            <div class="card-reveal">
                <h4 class="card-title grey-text text-darken-4"><span ng-bind-html='toTrustedHTML( conference.name )'></span><i class="material-icons right">close</i></h4>
                <div class="row">
                    <div class="col s3 m3 l2">
                        <img class="activator img-responsive circle" ng-src="@{{ imageMIME(conference.speaker_image) }}" alt="@{{ conference.name }}"
                             style="max-width: 60px; max-height: 60px">
                    </div>
                    <div class="col s9 m9 l10">
                        <h5 style="color: #F4842B;"><span ng-bind-html='toTrustedHTML( conference.speaker_name )'></span></h5>
                    </div>
                </div>
                <div class="row">
                    <p width="50%"><i class="material-icons">date_range</i>{{ trans('conference.date') }}</p>
                    <p><b>@{{ conference.startDate }}</b></p>
                </div>
                <div class="row">
                    <p class="text-justify"><span ng-bind-html='toTrustedHTML( conference.description )'></span></p>
                </div>
            </div>
        </div>
    </div>
</div>
