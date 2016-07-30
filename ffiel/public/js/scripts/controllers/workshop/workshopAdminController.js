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
            })
            .error(function(error){
                Notification.error({
                    message: '<u>Ocurrio un error al cargar la información.</u>',
                    title: '<b>Error</b> <s>notificación</s>',
                    delay: 3000
                });
            });

        /**
        * Creación de talleres
        * 21/07/2016
        active = true
        */
        // model del taller
        $scope.workshopCreate = {};
        $scope.workshopCreate.active = true;
        $scope.events = [];
        $scope.edit = false;
        $scope.file_workshop;        
        $scope.file_speaker;        

        $('.datepicker').pickadate({
            format: 'yyyy-mm-dd',
            selectMonths: true,
            selectYears: 15
        });

        $scope.getEvent = function() {
            workshopAdminServices.getEvent().success(function(data){
                angular.forEach(data, function(value, key){
                    $scope.events.push({id:value.id,label:value.name});
                });
            }).error(function(error){
                console.log(error);
                Notification.error({
                    message: '<u>Ocurrio un error al cargar la información de eventos</u>',
                    title: '<b>Error</b> <s>notificación</s>',
                    delay: 3000
                });
            })
        };

        $scope.save = function(){
            if(!$scope.file_workshop.filesize >= 948475 && !$scope.file_speaker.filesize >= 948475){
                $scope.workshopCreate.image = $scope.file_workshop.base64; 
                $scope.workshopCreate.speaker_image = $scope.file_speaker.base64; 
                $scope.workshopCreate.available = $scope.workshopCreate.quantity; 
                workshopAdminServices.save($scope.workshopCreate)
                .success(function(data){
                    console.log(data);
                    if (data.created) {
                        Notification.success({
                            title: '<i class="fa fa-info-circle"></i> Success',
                            message: 'Registro efectuado.', 
                            delay: 5000
                        });
                        setTimeout('document.location.reload()',3000);
                    };
                })
                .error(function(error){
                    console.log(error);
                    angular.forEach(error.errors,function(value){
                        $scope.error += value + "</br>";
                    })
                    Notification.error({
                        message: '<b>Error</b> </br>'+$scope.error,
                        title: '<u>Error al crear el periodo</u>',
                        delay: 10000
                    });
                });
            }else{
                if ($scope.file_workshop.filesize >= 948475) {
                    Notification.error({
                        message: 'La imagen del taller es demaciado grande',
                        delay: 5000});
                }
                if ($scope.file_speaker.filesize >= 948475) {
                    Notification.error({
                        message: 'La imagen del tallerista es demaciado grande',
                        delay: 5000})
                };
            }
        };

        $scope.onLoad = function (e, reader, file, fileList, fileOjects, fileObj) {
            
            if(file.size >= 948475){
                Notification.error({
                message: 'La imagen es demaciado grande.',
                delay: 5000});
                
            }else{
                Notification.success({
                    message: 'Archivo adjuntado correctamente.',
                    delay: 5000});
            }
        };

        $scope.submitForm = function(isValid) {
            if (isValid) {
            }
        };


        /*
        * Eliminación de talleres
        * 24/07/2016
        */
        $scope.entity = {};
        $scope.deleteworkshop = function(entity){
            $scope.entity = entity;
            $('#deleteworkshop').openModal({
                dismissible: false, // Modal can be dismissed by clicking outside of the modal
                opacity: .5, // Opacity of modal background
                in_duration: 300, // Transition in duration
                out_duration: 200, // Transition out duration
                starting_top: '54%', // Starting top style attribute
                ending_top: '60%', // Ending top style attribute
            });
        }

        $scope.actiondelete = function(){
            workshopAdminServices.delete($scope.entity.id)
            .success(function(data){
                Notification.success({
                    title: '<i class="fa fa-info-circle"></i> Eliminacion de talleres',
                    message: 'Se elimino correctamente el taller indicado.', 
                    delay: 5000
                });
                setTimeout('document.location.reload()',3000);
            })
            .error(function(error){
                Notification.error({
                    message: '<u>Ocurrio un error al eliminar el periodo</u>',
                    title: '<i class="fa fa-exclamation-triangle"></i> <b>Error</b> <s>notificación</s>',
                    delay: 5000
                });
            })
        }

        /*
        * Actualización de talleres
        */
        $scope.updateworkshop = function(entity){
            $scope.edit = true;
            $('#quantity').attr('disabled', true);
            $scope.workshopCreate = entity;
            $scope.workshopCreate.quantity = parseInt($scope.workshopCreate.quantity);
            $scope.workshopCreate.available = parseInt($scope.workshopCreate.available);
            $scope.workshopCreate.active = entity.active == 1 ? true : false;
            console.log($scope.workshopCreate.image);
            console.log($scope.workshopCreate.speaker_image);
            $('#updateworkshop').openModal({
                dismissible: true, // Modal can be dismissed by clicking outside of the modal
                opacity: .5, // Opacity of modal background
                in_duration: 300, // Transition in duration
                out_duration: 200, // Transition out duration
                starting_top: '54%', // Starting top style attribute
                ending_top: '60%', // Ending top style attribute
            });
        }

        $scope.updateaction = function(){
            if ($scope.workshopCreate.id > 10) {
                if (typeof($scope.file_workshop) != 'undefined') {
                    if ($scope.file_workshop.filesize >= 948475) {
                        Notification.error({
                            message: 'La imagen del taller es demaciado grande',
                            delay: 5000});
                        return false;
                    } else {
                        $scope.workshopCreate.image = $scope.file_workshop.base64; 
                    }
                };
                if (typeof($scope.file_speaker) != 'undefined') {
                    if ($scope.file_speaker.filesize >= 948475) {
                        Notification.error({
                            message: 'La imagen del tallerista es demaciado grande',
                            delay: 5000})
                        return false;
                    } else {
                        $scope.workshopCreate.speaker_image = $scope.file_speaker.base64;
                    }
                };
                
            };

            workshopAdminServices.update($scope.workshopCreate)
            .success(function(data){
                if (data.updated) {
                    Notification.success({
                        title: '<i class="fa fa-info-circle"></i> Success',
                        message: 'Registro efectuado.', 
                        delay: 5000
                    });
                    setTimeout('document.location.reload()',3000);
                };
            })
            .error(function(error){
                console.log(error);
                angular.forEach(error.errors,function(value){
                    $scope.error += value + "</br>";
                })
                Notification.error({
                    message: '<b>Error</b> </br>'+$scope.error,
                    title: '<u>Error al crear el periodo</u>',
                    delay: 10000
                });
            });
        }
});
