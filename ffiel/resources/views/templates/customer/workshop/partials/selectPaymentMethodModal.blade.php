<div id="paymentModal" class="modal">
    <div class="modal-content">
        <h4>Selecciona método de pago</h4>
        <br>
        <div class="row">
            <div class="col m6 l6 center">
                <a>
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
        <h4>Pago con tarjeta de crédito </h4>
        <br>
        <div class="row">
            <div class="input-field col s12">
                <select id="cc_type" name="cc_type" data-ng-model="workshop.cc_type">
                    <option value="" disabled selected>Selecciona opción</option>
                    <option value="visa" data-icon="http://downloadicons.net/sites/default/files/visa-bank-card-icon-33715.png" class="left circle">Visa</option>
                    <option value="mastercard" data-icon="http://icons.veryicon.com/ico/Business/Credit%20Card%20Payment/Master%20Card.ico" class="left circle">Mastercard</option>
                </select>
                <label>Tipo de tarjeta</label>
            </div>
            <div class="input-field col s12">
                <input data-ng-model="workshop.cc_number" id="cc_number" name="cc_number" type="number" class="validate"
                       maxlength="16">
                <label for="cc_number">Número de tarjeta</label>
            </div>
            <div class="input-field col s4">
                <select id="cc_month" name="cc_month" data-ng-model="workshop.cc_month">
                    <option value="" disabled selected>Selecciona opción</option>
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
                <label>Mes</label>
            </div>
            <div class="input-field col s4">
                <select id="cc_year" name="cc_year" data-ng-model="workshop.cc_year">
                    <option value="" disabled selected>Selecciona opción</option>
                    @for ($i = 2016; $i <= 2030; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <label>Año</label>
            </div>
            <div class="input-field col s4">
                <input data-ng-model="workshop.cc_ccv" id="cc_ccv" name="cc_ccv" type="text" class="validate">
                <label for="cc_ccv">CCV</label>
            </div>
            <div class="input-field col s6">
                <input data-ng-model="workshop.cc_name" id="cc_name" name="cc_name" type="text" class="validate">
                <label for="cc_name">Nombre</label>
            </div>
            <div class="input-field col s6">
                <input data-ng-model="workshop.cc_lastName" id="cc_lastName" name="cc_lastName" type="text" class="validate">
                <label for="cc_lastName">Apellidos</label>
            </div>
        </div>
        <div class="modal-footer">
            <a data-ng-click="postPaymentCreditCard(workshop)" class=" modal-action modal-close waves-effect waves-green btn-flat">Enviar</a>
        </div>
    </div>
</div>