angular
    .module('FFIEL', [
        'angular-advanced-searchbox',
        'angularUtils.directives.dirPagination',
        'naif.base64',
        'ui-notification'
    ])
    .value('HOST', 'http://localhost:8000/');