<div id="paymentModal" class="modal">
    <div class="modal-content">
        <h4>Selecciona método de pago</h4>
        <br>
        <div class="row">
            <div class="col m6 l6 center">
                <a data-ng-click="postPaymentPaypalAccount(workshop)">
                    <img src="https://www.paypalobjects.com/es_ES/i/bnr/bnr_shopNowUsing_150x40.gif" class="img-responsive">
                </a>
            </div>
            <div class="col m6 l6 center">
                <a data-ng-click="paymentCreditCard(workshop)">
                    <img src="https://www.paypalobjects.com/es_ES/i/btn/x-click-butcc.gif" class="img-responsive">
                </a>
            </div>
        </div>
    </div>
</div>

<div id="paymentCreditCard" class="modal">
    <div class="modal-content">
        <h4 class="center">Pago con tarjeta de crédito </h4>
        <br>
        <div class="row">
            <div class="col l4 s12 m12">
                <img class="img-responsive center" ng-src="@{{ imageMIME(workshop.image) }}" alt="@{{ workshop.name }}"
                        style="width:200px; heigth:200px">
            </div>
            <div class="col l8 s12 m12">
                <h4 class="grey-text text-darken-4"><span ng-bind-html='toTrustedHTML( workshop.name )'></span></h4>
                <h5 style="color: #F4842B;"><span ng-bind-html='toTrustedHTML( workshop.speaker_name )'></span></h5>
                <h6 style="color: #68266D;"><span ng-bind-html='toTrustedHTML( workshop.speaker_occupation )'></span></h6>
                <h3 class="light" style="color: #68266D;">$ @{{ workshop.price }}</h3>
            </div>
        </div>
        <form name="ainf" ng-submit="submitForm(ainf.$valid)" novalidate>
            <div class="row">
                <div class="input-field col s12">
                    <select id="cc_type" name="cc_type" data-ng-model="workshop.cc_type" required>
                        <option value="" disabled>Selecciona opción</option>
                        <option value="visa" data-icon="http://downloadicons.net/sites/default/files/visa-bank-card-icon-33715.png" class="left circle">Visa</option>
                        <option value="mastercard" data-icon="http://icons.veryicon.com/ico/Business/Credit%20Card%20Payment/Master%20Card.ico" class="left circle">Mastercard</option>
                    </select>
                    <label for="cc_type">Tipo de tarjeta</label>
                    <p class="red-text text-darken-3" ng-show="ainf.cc_type.$invalid && !ainf.cc_type.$pristine">Tipo de tarjeta requerida</p>

                </div>
                <div class="input-field col s12">
                    <input data-ng-model="workshop.cc_number" id="cc_number" name="cc_number" type="text" length="16" creditcard-validate required>
                    <label for="cc_number">Número de tarjeta</label>
                    <p class="red-text text-darken-3" ng-show="ainf.cc_number.$invalid && !ainf.cc_number.$pristine">N&uacute;mero de tarjeta requerida</p>
                </div>
                <div class="input-field col s4">
                    <select id="cc_month" name="cc_month" data-ng-model="workshop.cc_month" required>
                        <option value="" disabled>Selecciona opción</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <label for="cc_month" >Mes</label>
                    <p class="red-text text-darken-3" ng-show="ainf.cc_month.$invalid && !ainf.cc_month.$pristine">Mes de tarjeta requerido</p>
                </div>
                <div class="input-field col s4">
                    <select id="cc_year" name="cc_year" data-ng-model="workshop.cc_year" required>
                        <option value="" disabled>Selecciona opción</option>
                        @for ($i = 2016; $i <= 2030; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    <label for="cc_year">Año</label>
                    <p class="red-text text-darken-3" data-success="right" ng-show="ainf.cc_year.$invalid && !ainf.cc_year.$pristine">A&ntilde;o de tarjeta requerido</p>
                </div>
                <div class="input-field col s4">
                    <input data-ng-model="workshop.cc_ccv" id="cc_ccv" name="cc_ccv" type="text" length="3" ccv-validate required>
                    <label for="cc_ccv">CCV</label>
                    <p class="red-text text-darken-3" ng-show="ainf.cc_ccv.$invalid && !ainf.cc_ccv.$pristine">CCV de tarjeta requerido</p>
                </div>
                <div class="input-field col s6">
                    <label for="cc_name">Nombre</label>
                    <input data-ng-model="workshop.cc_name" id="cc_name" name="cc_name" type="text" required>
                    <p class="red-text text-darken-3" ng-show="ainf.cc_name.$invalid && !ainf.cc_name.$pristine">Nombre de titular requerido</p>
                </div>
                <div class="input-field col s6">
                    <input data-ng-model="workshop.cc_lastName" id="cc_lastName" name="cc_lastName" type="text" required>
                    <label for="cc_lastName">Apellidos</label>
                    <p class="red-text text-darken-3" ng-show="ainf.cc_lastName.$invalid && !ainf.cc_lastName.$pristine">Apellidos de titular requerido</p>
                </div>
            </div>
            <div class="modal-footer">
                <i ng-show="entranferencia" class="fa fa-spinner fa-pulse fa-3x fa-fw center"></i>
                <button ng-hide="entranferencia" ng-disabled="ainf.$invalid" ng-class="{'disabled':ainf.$invalid , '': ainf.$valid  }" class="modal-action btn waves-effect waves-light ">Enviar</button>
            </div>
        </form>
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
                <img class="img-responsive center" ng-src="@{{ imageMIME(workshop.image) }}" alt="@{{ workshop.name }}"
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