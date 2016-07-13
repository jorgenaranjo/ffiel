/**
 * Created by taxque on 12/07/16.
 */
angular.module('FFIEL')
    .factory('paypalServices', function (HOST, $http) {
        return{
            postPaymentCreditCard : function(workshop){
                return $http.post(HOST+'api/v1/paymentCC', workshop)
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