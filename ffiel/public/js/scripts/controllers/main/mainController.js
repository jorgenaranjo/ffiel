/**
 * Created by taxque on 21/02/16.
 */
'use strict';

angular.module('FFIEL')
.controller('MainController', function ($scope, $location, Notification) {
    $scope.sort = function(keyname){
        $scope.sortKey = keyname;   //set the sortKey to the param passed
        $scope.reverse = !$scope.reverse; //if true make it false and vice versa
    }
    $scope.urlId = '';
    $scope.urlId = $location.absUrl().split('/')[$location.absUrl().split('/').length-1];

    $scope.imageMIME = function(image){
        var MIME = "";
        try{
            if(image.charAt(0)=='/'){
                return "data:image/jpeg;base64," + image;
            }else if(image.charAt(0)=='i'){
                return "data:image/png;base64," + image;
            }
        }catch(e){
            return "";
        }
    }
});