/**
 * Created by taxque on 7/07/16.
 */

'use strict';

angular.module('FFIEL')
    .controller('WorkshopsController', function ($scope, workshopCustomerServices, Notification) {
        $scope.workshop = {};
        $scope.workshops = [];

        workshopCustomerServices.getAllWorkshop()
            .success(function(data){
                $scope.workshops=data;
                console.log(data);
            })
            .error(function(error){
                console.log(error);
            });

    });

