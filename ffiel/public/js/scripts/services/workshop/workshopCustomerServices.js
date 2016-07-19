/**
 * Created by taxque on 7/07/16.
 */
angular.module('FFIEL')
    .factory('workshopCustomerServices', function (HOST, $http) {
        return{
            getAllWorkshop : function(){
                return $http.get(HOST+'api/v1/workshops')
            },
            myWorkshops: function(){
                return $http.get(HOST+'api/v1/myWorkshops')
            }
        }
    });