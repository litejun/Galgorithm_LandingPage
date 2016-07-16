'use strict';

/**
 * @ngdoc function
 * @name myToDoApp.controller:TodoCtrl
 * @description
 * # TodoCtrl
 * Controller of the myToDoApp
 */
angular.module('myToDoApp')
  .controller('TodoCtrl', function ($scope) {
    $scope.todos = ['Item 1', 'Item 2', 'Item 3'];
  });
