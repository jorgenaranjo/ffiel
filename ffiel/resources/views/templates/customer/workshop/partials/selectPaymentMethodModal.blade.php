<div id="paymentModal" class="modal">
    <div class="modal-content">
        <h4>Selecciona método de pago</h4>
        <br>
        <div class="row">
            <div class="col m12 l12 center">
                <a data-ng-click="postPaymentPaypalAccount(workshop)">
                    <img src="https://www.paypalobjects.com/es_ES/i/bnr/bnr_shopNowUsing_150x40.gif" class="img-responsive">
                </a>
            </div>
        </div>
    </div>
</div>

<div id="paymentCreditCard" class="modal">
    <div class="modal-content">

    </div>
</div>

<div id="tdcExitosa" class="modal">
    <div class="modal-content">
        <div class="row">
            <div class="col m12 l12 center">
                <h3>Felicidades! Has sido inscrito al taller:</h3>
            </div>
        </div>
        <div class="row">
            <div class="col l4 s12 m12">
                <img class="img-responsive center" ng-src="@{{ workshop.image }}" alt="@{{ workshop.name }}"
                     style="width:200px; heigth:200px">
            </div>
            <div class="col l8 s12 m12">
                <h4 class="grey-text text-darken-4"><span ng-bind-html='toTrustedHTML( workshop.name )'></span></h4>
                <h5 style="color: #F4842B;"><span ng-bind-html='toTrustedHTML( workshop.speaker_name )'></span></h5>
                <h6 style="color: #68266D;"><span ng-bind-html='toTrustedHTML( workshop.speaker_occupation )'></span></h6>
            </div>
        </div>
        <div class="row">
            <div class="col m12 l12 center">
                <h4>Detalles de tranferencia</h4>
                <h6><b>ID de pago:</b> @{{ tranferencia.id }}</h6>
                <h6><b>Fecha de autorizacion:</b> @{{ tranferencia.create_time }}</h6>
            </div>
        </div>
    </div>
</div>