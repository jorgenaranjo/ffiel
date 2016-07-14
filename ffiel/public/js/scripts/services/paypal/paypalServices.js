/**
 * Created by taxque on 12/07/16.
 */
angular.module('FFIEL')
    .factory('paypalServices', function (HOST, $http) {
        return{
            postPaymentCreditCard : function(workshop){
                return $http.post(HOST+'api/v1/paymentCC', workshop)
            },
            postPaymentPaypalAccount : function(workshop){
                return $http.put(HOST+'api/v1/paymentCP', workshop)
            }
        }
    });