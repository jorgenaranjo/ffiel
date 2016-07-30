/**
 * Created by taxque on 18/07/16.
 */
'use strict';
angular.module('FFIEL')

    .directive('creditcardValidate', function() {
        return {
            restrice: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ngModel) {
                var numberregex =  /^[0-9]{16}$/;
                ngModel.$parsers.unshift(function(viewValue){
                    if(numberregex.test(viewValue)) {
                        ngModel.$setValidity('numbercheck', true);
                        return viewValue;
                    }
                    else{
                        ngModel.$setValidity('numbercheck', false);
                        return undefined;
                    }
                });
            }
        }
    })
    .directive('ccvValidate', function() {
        return {
            restrice: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ngModel) {
                var numberregex =  /^[0-9]{3}$/;
                ngModel.$parsers.unshift(function(viewValue){
                    if(numberregex.test(viewValue)) {
                        ngModel.$setValidity('numbercheck', true);
                        return viewValue;
                    }
                    else{
                        ngModel.$setValidity('numbercheck', false);
                        return undefined;
                    }
                });
            }
        }
    })
    .directive('ckEditor', [function () {
        return {
            require: '?ngModel',
            link: function ($scope, elm, attr, ngModel) {
                var ck = CKEDITOR.replace(elm[0]);

                ck.on('pasteState', function () {
                    $scope.$apply(function () {
                        ngModel.$setViewValue(ck.getData());
                    });
                });
                ngModel.$render = function (value) {
                    ck.setData(ngModel.$modelValue);
                };
            }
        };
    }])