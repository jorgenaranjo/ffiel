<div id="paymentModal" class="modal">
    <div class="modal-content">
        <h4 class="center">Selecciona método de pago</h4>
        <br>
        <div class="row">
            <div class="col m12 l12 center" ng-hide="transActiva">
                <h5>Cuenta de paypal</h5>
                <a data-ng-click="postPaymentPaypalAccount(workshop)" disabled="disabled">
                    <img src="{{ asset('/images/paypal-logo.png') }}" class="img-responsive" style="max-height: 170px; max-width: 200px">
                </a>
            </div>
            <div class="col m12 l12 center" ng-show="transActiva">
                <div class="preloader-wrapper big active">
                    <div class="spinner-layer spinner-blue-only">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div><div class="gap-patch">
                            <div class="circle"></div>
                        </div><div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m6 l6 center">
                <!--<h5>Tarjeta de crédito/débito</h5>
                <a data-ng-click="paymentCreditCard(workshop)">
                    <img src="{{ asset('/images/visaMaster.png') }}" class="img-responsive" style="max-height: 170px; max-width: 200px">
                </a>-->
            </div>

            <!--
            <p>Buen d&iacute;a!</p>

<p>Te proporcionamos los datos de la cuenta Banco para que realices la inscripci&oacute;n del taller de tu inter&eacute;s mediante la siguiente referencia bancaria:</p>

<p><strong>Nombre del banco:</strong> Scotiabank</p>

<p><strong>No. Cuenta:</strong> 01705346673</p>

<p><strong>Clabe Interbancaria:</strong> 044225017053466739</p>

<p>A nombre de<strong> Daniel Alejandro Arr&oacute;niz R&aacute;bago</strong></p>

<p>&nbsp;</p>

<p>Una vez realizado el pago nos podr&aacute;s enviar el comprobante al correo <strong>contacto@ffiel.com</strong>, para proporcionarte tu n&uacute;mero de registro al taller de tu elecci&oacute;n. Muchas gracias.</p>
-->

        </div>
    </div>
</div>

<div id="paymentCreditCard" class="modal">
    <div class="modal-content">
        <h4 class="center">Pago con tarjeta de crédito/débito </h4>
        <br>
        <div class="row">
            <div class="col l4 s12 m12">
                <img class="img-responsive center" ng-src="@{{ workshop.image }}" alt="@{{ workshop.name }}"
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
                    <input data-stripe="number" data-ng-model="workshop.cc_number" id="cc_number" name="cc_number" type="text" length="16" creditcard-validate required>
                    <label for="cc_number">Número de tarjeta</label>
                    <p class="red-text text-darken-3" ng-show="ainf.cc_number.$invalid && !ainf.cc_number.$pristine">N&uacute;mero de tarjeta requerida</p>
                </div>
                <div class="input-field col s4">
                    <select data-stripe="exp_month" id="cc_month" name="cc_month" data-ng-model="workshop.cc_month" required>
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
                    <select data-stripe="exp_year" id="cc_year" name="cc_year" data-ng-model="workshop.cc_year" required>
                        <option value="" disabled>Selecciona opción</option>
                        @for ($i = 2016; $i <= 2030; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    <label for="cc_year">Año</label>
                    <p class="red-text text-darken-3" data-success="right" ng-show="ainf.cc_year.$invalid && !ainf.cc_year.$pristine">A&ntilde;o de tarjeta requerido</p>
                </div>
                <div class="input-field col s4">
                    <input data-stripe="cvc" data-ng-model="workshop.cc_ccv" id="cc_ccv" name="cc_ccv" type="text" length="3" ccv-validate required>
                    <label for="cc_ccv">CCV</label>
                    <p class="red-text text-darken-3" ng-show="ainf.cc_ccv.$invalid && !ainf.cc_ccv.$pristine">CCV de tarjeta requerido</p>
                </div>
                <div class="input-field col s12">
                    <label for="cc_name">Nombre del tarjetahabiente</label>
                    <input data-ng-model="workshop.cc_name" id="cc_name" name="cc_name" type="text" data-conekta="card[name]" required>
                    <p class="red-text text-darken-3" ng-show="ainf.cc_name.$invalid && !ainf.cc_name.$pristine">Nombre de titular requerido</p>
                </div>
            </div>
            <div class="modal-footer center">
                <div class="col m12 l12 center" ng-show="entranferencia">
                    <div class="preloader-wrapper big active">
                        <div class="spinner-layer spinner-blue-only">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div><div class="gap-patch">
                                <div class="circle"></div>
                            </div><div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <button ng-hide="entranferencia" ng-disabled="ainf.$invalid" ng-class="{'disabled':ainf.$invalid , '': ainf.$valid  }" class="modal-action btn waves-effect waves-light ">Enviar</button>
            </div>
        </form>
    </div>
</div>

@section('extra_js')
    <script>
        Stripe.setPublishableKey("{{ env('STRIPE_PUBLIC_KEY') }}");
    </script>
@endsection

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