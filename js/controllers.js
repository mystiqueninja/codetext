"use strict"
var staffControllers = angular.module('staffControllers', []);

staffControllers.controller('editorController', ['$scope', '$http', function ($scope, $http) {
	$http.get('data/modes.json').success(function (data) {
		$scope.modes = data;
	});
	$http.get('data/themes.json').success(function (data) {
		$scope.themes = data;
	});
	$scope.editorMode = "javascript";
	$scope.editorTheme = "bright_red";
}]);