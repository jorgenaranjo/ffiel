/**
 * Created by taxque on 7/07/16.
 */
angular.module('FFIEL')
    .filter('start', function () {
        return function (input, start) {
            if (!input || !input.length) { return; }

            start = +start;
            return input.slice(start);
        };
    })
    .filter('renderHTMLCorrectly', function($sce)
    {
        return function(stringToParse)
        {
            return $sce.trustAsHtml(stringToParse);
        }
    })
;