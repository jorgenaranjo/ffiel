/**
 * Created by taxque on 7/07/16.
 */

'use strict';

angular.module('FFIEL')
    .controller('WorkshopsController', function ($scope, workshopCustomerServices, Notification, paypalServices) {
        $scope.workshop = {};
        $scope.workshops = [];

        workshopCustomerServices.getAllWorkshop()
            .success(function(data){
                $scope.workshops=data;
            })
            .error(function(error){
                Notification.error(
                    {
                        message: '<b>Error notificación</b>',
                        title: 'Error al cargando información',
                        delay: 5000
                    });
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
            paypalServices.postPaymentCreditCard(workshop)
                .success(function(data){
                    console.log(data);
                    $('#paymentCreditCard').closeModal();
                    Notification.success({message: 'Creado correctamente.', delay: 5000});
                })
                .error(function(error){
                    console.log(error);
                });
        }

        $scope.postPaymentPaypalAccount = function(workshop){
            paypalServices.postPaymentPaypalAccount(workshop)
                .success(function(data){
                    console.log(data);
                    $('#paymentCreditCard').closeModal();
                    Notification.success({message: 'Creado correctamente.', delay: 5000});
                })
                .error(function(error){
                    console.log(error);
                });
        }


    });

