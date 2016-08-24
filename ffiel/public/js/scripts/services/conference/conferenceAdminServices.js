/**
 * Created by Juan Gomez on 7/07/16.
 */
angular.module('FFIEL')
    .factory('conferenceAdminServices', function (HOST, $http) {
        return{
            getAllConference : function(){
                return $http.get(HOST+'api/v1/conferences')
            },
            getEvent : function(){
                return $http.get(HOST + 'api/v1/conferences-event')
            },
            save : function (conferences) {
                return $http.post(HOST+'api/v1/conferences', conferences)
            },
            update : function(conferences){
                return $http.put(HOST+'api/v1/conferences', conferences)
            },
            delete : function(id){
                return $http.delete(HOST+'api/v1/conferences/' + id)
            }
            
        }
    })