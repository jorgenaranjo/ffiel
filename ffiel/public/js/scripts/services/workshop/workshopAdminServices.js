/**
 * Created by taxque on 7/07/16.
 */
angular.module('FFIEL')
    .factory('workshopAdminServices', function (HOST, $http) {
        return{
            getAllWorkshop : function(){
                return $http.get(HOST+'api/v1/workshops')
            },
            getEvent : function(){
                return $http.get(HOST + 'api/v1/workshops-event')
            },
            save : function (workshops) {
                return $http.post(HOST+'api/v1/workshops', workshops)
            },
            update : function(workshops){
                return $http.put(HOST+'api/v1/workshops', workshops)
            },
            delete : function(id){
                return $http.delete(HOST+'api/v1/workshops/' + id)
            }
            
        }
    })