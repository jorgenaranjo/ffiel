/**
 * Created by Juan Gomez on 31/07/16.
 */

'use strict';

angular.module('FFIEL')
    .controller('ConferencesAdminController', function ($scope, conferenceAdminServices, Notification) {
        $scope.conferences = [];

        // Fileds for search in user model
        $scope.availableSearchParams = [
            { key: "name", name: "Nombre", placeholder: "Nombre..." },
            { key: "speaker_name", name: "Expositor", placeholder: "Expositor..." },
            { key: "quantity", name: "Cantidad", placeholder: "Cantidad..." },
        ];

        $scope.init = function() {
            conferenceAdminServices.getAllConference()
                .success(function(data) {
                    $scope.conferences = data;
                })
                .error(function(error) {
                    Notification.error({
                        message: '<u>Ocurrio un error al cargar la información.</u>',
                        title: '<b>Error</b> <s>notificación</s>',
                        delay: 3000
                    });
                });
        }

        /**
        * Creación de talleres
        * 21/07/2016
        active = true
        */
        // model del taller
        $scope.conferenceCreate = {};
        $scope.conferenceCreate.active = true;
        $scope.conferenceCreate.quantity = 0;
        $scope.events = [];
        $scope.edit = false;
        $scope.file_conference;        
        $scope.file_speaker;        

        $('.datepicker').pickadate({
            format: 'yyyy-mm-dd',
            selectMonths: true,
            selectYears: 15
        });

        $scope.getEvent = function() {
            conferenceAdminServices.getEvent().success(function(data) {
                angular.forEach(data, function(value, key) {
                    $scope.events.push({id:value.id,label:value.name});
                });
            }).error(function(error) {
                Notification.error({
                    message: '<u>Ocurrio un error al cargar la información de eventos</u>',
                    title: '<b>Error</b> <s>notificación</s>',
                    delay: 3000
                });
            })
        };

        $scope.save = function() {
            if ($scope.file_conference.filesize <= 948475 && $scope.file_speaker.filesize <= 948475) {
                $scope.conferenceCreate.image = $scope.file_conference.base64; 
                $scope.conferenceCreate.speaker_image = $scope.file_speaker.base64; 
                $scope.conferenceCreate.available = $scope.conferenceCreate.quantity; 
                conferenceAdminServices.save($scope.conferenceCreate)
                .success(function(data) {
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
                    angular.forEach(error.errors,function(value){
                        $scope.error += value + "</br>";
                    })
                    Notification.error({
                        message: '<b>Error</b> </br>' + $scope.error,
                        title: '<u>Error al registrar la conferencia</u>',
                        delay: 10000
                    });
                });
            } else {
                if ($scope.file_conference.filesize >= 948475) {
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
            if (file.size >= 948475) {
                Notification.error({
                message: 'La imagen es demaciado grande.',
                delay: 5000});
                
            } else {
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
        $scope.deleteConference = function(entity) {
            $scope.entity = entity;
            $('#deleteConference').openModal({
                dismissible: false, // Modal can be dismissed by clicking outside of the modal
                opacity: .5, // Opacity of modal background
                in_duration: 300, // Transition in duration
                out_duration: 200, // Transition out duration
                starting_top: '54%', // Starting top style attribute
                ending_top: '60%', // Ending top style attribute
            });
        }

        $scope.actionDelete = function() {
            conferenceAdminServices.delete($scope.entity.id)
            .success(function(data) {
                Notification.success({
                    title: '<i class="fa fa-info-circle"></i> Eliminacion de talleres',
                    message: 'Se elimino correctamente el taller indicado.', 
                    delay: 5000
                });
                setTimeout('document.location.reload()',3000);
            })
            .error(function(error) {
                Notification.error({
                    message: '<u>Ocurrio un error al eliminar la conferencia</u>',
                    title: '<i class="fa fa-exclamation-triangle"></i> <b>Error</b> <s>notificación</s>',
                    delay: 5000
                });
            })
        }

        /*
        * Actualización de talleres
        */
        $scope.updateConference = function(entity) {
            $scope.edit = true;
            $('#quantity').attr('disabled', true);
            $scope.conferenceCreate = entity;
            $scope.conferenceCreate.quantity = parseInt($scope.conferenceCreate.quantity);
            $scope.conferenceCreate.available = parseInt($scope.conferenceCreate.available);
            $scope.conferenceCreate.active = entity.active == 1 ? true : false;
            $('#updateConference').openModal({
                dismissible: true, // Modal can be dismissed by clicking outside of the modal
                opacity: .5, // Opacity of modal background
                in_duration: 300, // Transition in duration
                out_duration: 200, // Transition out duration
                starting_top: '54%', // Starting top style attribute
                ending_top: '60%', // Ending top style attribute
            });
        }

        $scope.updateAction = function() {
            if (typeof($scope.file_conference) != 'undefined') {
                if ($scope.file_conference.filesize >= 948475) {
                    Notification.error({
                        message: 'La imagen de la conferencia es demaciado grande',
                        delay: 5000
                    });
                    return false;
                } else {
                    $scope.conferenceCreate.image = $scope.file_conference.base64; 
                }
            };
            if (typeof($scope.file_speaker) != 'undefined') {
                if ($scope.file_speaker.filesize >= 948475) {
                    Notification.error({
                        message: 'La imagen del conferencista es demaciado grande',
                        delay: 5000})
                    return false;
                } else {
                    $scope.conferenceCreate.speaker_image = $scope.file_speaker.base64;
                }
            };

            conferenceAdminServices.update($scope.conferenceCreate)
            .success(function(data) {
                if (data.updated) {
                    Notification.success({
                        title: '<i class="fa fa-info-circle"></i> Success',
                        message: 'Registro efectuado.', 
                        delay: 5000
                    });
                    setTimeout('document.location.reload()',3000);
                };
            })
            .error(function(error) {
                angular.forEach(error.errors,function(value){
                    $scope.error += value + "</br>";
                })
                Notification.error({
                    message: '<b>Error</b> </br>'+$scope.error,
                    title: '<u>Error al actualizar la conferencia</u>',
                    delay: 10000
                });
            });
        }
});
