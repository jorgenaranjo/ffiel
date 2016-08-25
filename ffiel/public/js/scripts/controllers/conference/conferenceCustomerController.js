/**
 * Created by taxque on 7/07/16.
 */

'use strict';

angular.module('FFIEL')
    .controller('ConferencesController', function ($scope, conferencesCustomerServices, Notification, $window) {
        $scope.conference = {};
        $scope.conferences = [];

        $scope.loading = true;
        conferencesCustomerServices.getAllConferences()
            .success(function(data){
                $scope.conferences=data;
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

    });

