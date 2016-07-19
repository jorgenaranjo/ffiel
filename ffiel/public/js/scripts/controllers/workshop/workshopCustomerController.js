/**
 * Created by taxque on 7/07/16.
 */

'use strict';

angular.module('FFIEL')
    .controller('WorkshopsController', function ($scope, workshopCustomerServices, Notification, paypalServices, $window) {
        $scope.workshop = {};
        $scope.workshops = [];

        $scope.entranferencia = false;
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
            paypalServices.postPaymentCreditCard(workshop)
                .success(function(data){
                    $scope.tranferencia = data;
                    $('#paymentCreditCard').closeModal();
                    $('#tdcExitosa').openModal();
                    Notification.success({message: 'Transacci&oacute;n exitosa.', delay: 5000});
                    $scope.cc_type ='';
                    $scope.cc_number ='';
                    $scope.cc_month ='';
                    $scope.cc_year ='';
                    $scope.cc_ccv ='';
                    $scope.cc_name ='';
                    $scope.cc_lastName ='';

                })
                .error(function(error){
                    $scope.entranferencia = false;
                    Notification.error({
                        message: '<b>Error:</b> </br>'+error.error,
                        title: '<b>Error con transacci&oacute;n</b>',
                        delay: 20000
                    });
                });
        }

        $scope.postPaymentPaypalAccount = function(workshop){
            paypalServices.postPaymentPaypalAccount(workshop)
                .success(function(data){
                    console.log(data);
                    $window.location.href = data;
                    $('#paymentCreditCard').closeModal();
                    Notification.success({message: 'Redireccionando a paypal', delay: 5000});
                })
                .error(function(error){
                    console.log(error);
                });
        }

        $scope.submitForm = function(isValid) {
            if (isValid) {
                $scope.postPaymentCreditCard($scope.workshop);
            }
        };

    });

