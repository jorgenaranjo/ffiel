/**
 * Created by taxque on 7/07/16.
 */
angular.module('FFIEL')
    .factory('conferencesCustomerServices', function (HOST, $http) {
        return{
            getAllConferences : function(){
                return $http.get(HOST+'api/v1/conferences')
            }
        }
    });