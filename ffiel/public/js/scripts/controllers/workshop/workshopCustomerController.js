/**
 * Created by taxque on 7/07/16.
 */

'use strict';

angular.module('FFIEL')
    .controller('MyWorkshopsController', function ($scope, workshopCustomerServices, Notification, paypalServices, $window) {
        $scope.workshop = {};
        $scope.workshops = [];

        $scope.entranferencia = false;
        $scope.loading = true;

        workshopCustomerServices.myWorkshops()
            .success(function(data){
                $scope.workshops=data;
                $scope.loading = false;
                console.log(data);
            })
            .error(function(error){
                Notification.error(
                    {
                        message: '<b>Error notificación</b>',
                        title: 'Error al cargando información',
                        delay: 5000
                    });
                $scope.loading = false;
            });
    })
    .controller('WorkshopsController', function ($scope, workshopCustomerServices, Notification, paypalServices, $window) {
        $scope.workshop = {};
        $scope.workshops = [];

        $scope.entranferencia = false;
        $scope.transActiva = false;
        $scope.loading = true;
        workshopCustomerServices.getAllWorkshop()
            .success(function(data){
                $scope.workshops=data;
                $scope.loading = false;
            })
            .error(function(error){
                Notification.error(
                    {
                        message: '<b>Error notificación</b>',
                        title: 'Error al cargando información',
                        delay: 5000
                    });
                $scope.loading = false;
            });

        $scope.paymentModal = function(workshop){
            $scope.workshop = workshop;
            $('#paymentModal').openModal();
        }

        $scope.paymentCreditCard = function(){
            $('#paymentModal').closeModal();
            $('#paymentCreditCard').openModal();
        }

        $scope.paymentPaypalAccount = function(){
            $('#paymentModal').closeModal();
            $('#paymentPaypalAccount').openModal();
        }

        $scope.postPaymentCreditCard = function(workshop){
            $scope.entranferencia = true;
            Conekta.setLanguage('es')
            var errorResponseHandler, successResponseHandler, tokenParams;
            tokenParams = {
                "card": {
                    "number": workshop.cc_number,
                    "name": workshop.cc_name,
                    "exp_year": workshop.cc_year,
                    "exp_month": workshop.cc_month,
                    "cvc": workshop.cc_ccv
                }
            };

            successResponseHandler = function(token) {
                workshop.token = token;
                workshop.cc_month ='';
                workshop.cc_year ='';
                workshop.cc_ccv ='';
                paypalServices.postPaymentCreditCard(workshop)
                    .success(function(data){
                        $scope.tranferencia = data;
                        $('#paymentCreditCard').closeModal();
                        $('#tdcExitosa').openModal();
                        Notification.success({message: 'Transacci&oacute;n exitosa.', delay: 5000});
                        $scope.cc_number ='';
                        $scope.cc_month ='';
                        $scope.cc_year ='';
                        $scope.cc_ccv ='';
                        $scope.cc_name ='';
                        $scope.entranferencia = false;
                    })
                    .error(function(error){
                        $scope.entranferencia = false;
                        Notification.error({
                            message: '<b>Error:</b> </br>'+error.error,
                            title: '<b>Error con transacci&oacute;n</b>',
                            delay: 20000
                        });
                    });
            };

            /* Después de recibir un error */
            errorResponseHandler = function(error) {
                $scope.entranferencia = false;
                Notification.error({
                    message: '<b>Error:</b> </br>'+error.message,
                    title: '<b>Error con transacci&oacute;n</b>',
                    delay: 20000
                });
            };

            /* Tokenizar una tarjeta en Conekta */
            Conekta.token.create(tokenParams, successResponseHandler, errorResponseHandler);
        }

        $scope.postPaymentPaypalAccount = function(workshop){
            $scope.transActiva = true;
            paypalServices.postPaymentPaypalAccount(workshop)
                .success(function(data){
                    $window.location.href = data;
                    $scope.transActiva = false;
                    $('#paymentCreditCard').closeModal();
                    Notification.success({message: 'Redireccionando a paypal', delay: 5000});
                })
                .error(function(error){
                    $scope.transActiva = false;
                });
        }

        $scope.submitForm = function(isValid) {
            if (isValid) {
                $scope.postPaymentCreditCard($scope.workshop);
            }
        };

    });

