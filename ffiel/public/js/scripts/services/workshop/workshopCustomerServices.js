/**
 * Created by taxque on 7/07/16.
 */
angular.module('FFIEL')
    .factory('workshopCustomerServices', function (HOST, $http) {
        return{
            getAllWorkshop : function(){
                return $http.get(HOST+'api/v1/workshops')
            }
            /*save : function(user){
             return $http.post(HOST+'api/v1/users', user)
             },
             update : function(user){
             return $http.put(HOST+'api/v1/users', user)
             },
             delete : function(user){
             return $http.delete(HOST+'api/v1/users/'+user.id)
             }*/
        }
    });