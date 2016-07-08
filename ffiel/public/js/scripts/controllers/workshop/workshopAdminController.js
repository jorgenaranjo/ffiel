/**
 * Created by taxque on 7/07/16.
 */

'use strict';

angular.module('FFIEL')
    .controller('WorkshopsController', function ($scope, workshopAdminServices, Notification) {
        $scope.workshop = {};
        $scope.workshops = [];

        // Fileds for search in user model
        $scope.availableSearchParams = [
            { key: "name", name: "Nombre", placeholder: "Nombre..." },
            { key: "speaker_name", name: "Expositor", placeholder: "Expositor..." },
            { key: "quantity", name: "Cantidad", placeholder: "Cantidad..." },
        ];

        workshopAdminServices.getAllWorkshop()
            .success(function(data){
                $scope.workshops=data;
                console.log(data);
            })
            .error(function(error){
                console.log(error);
            });

});
