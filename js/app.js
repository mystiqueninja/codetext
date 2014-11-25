"use strict"
var myApp = angular.module('myApp', [
	'ngRoute', 
	'staffControllers'
]);

myApp.config(['$routeProvider', function ($routeProvider) {
	$routeProvider
	.when('/editor', {
		templateUrl: 'partials/editor.html',
		controller: 'editorController'
	});
}]);