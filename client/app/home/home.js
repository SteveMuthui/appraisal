"use strict";

angular
    .module("appraisal.home", ["ngRoute"])
    .config(["$routeProvider", function ($routeProvider) {
        $routeProvider.when("/home", {
            templateUrl: "home/home.html",
            controller: "HomeCtrl"
        });
    }
    ])
    .controller('HomeCtrl', ["$scope", function ($scope) {

    }])