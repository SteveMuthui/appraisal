"use strict";

angular
  .module("appraisal.login", ["ngRoute"])

  .config([
    "$routeProvider",
    function ($routeProvider) {
      $routeProvider.when("/login", {
        templateUrl: "login/login.html",
        controller: "LoginCtrl"
      });
    }
  ])

  .controller("LoginCtrl", ["$scope", "$http", "$location", function ($scope, $http, $location) {

    let ourForm = document.getElementById("loginForm");
    let url = "http://awesome.test/appraisal/api/user/login.php";
    let currentUser = []
    let submitLoginForm = function () {

      let formData = {
        email: $scope.email,
        password: $scope.password
      };
      // send form data to database
      $http({
        method: "POST",
        url: url,
        data: formData,
        headers: { "Content-Type": "application/x-www-form-urlencoded" }
      })
        .then(function (result) {
          // redirect to login page
          // store token in localstorage
          localStorage.setItem('currentUser',
            JSON.stringify({
              token: result.data.jwt
            })
          )
          // get token and validate
          let user = JSON.parse(localStorage.getItem("currentUser"))
          let currentToken = { jwt: user.token }
          let validateUrl = "http://awesome.test/appraisal/api/user/validate.php"
          $http({
            method: "POST",
            url: validateUrl,
            data: currentToken,
            headers: { "Content-Type": "application/x-www-form-urlencoded" }
          }).then((result) => {
            let status = result.data.message
            if (status === "Access granted.") {
              window.location.href = "http://localhost:8000/#!/home"
            }
            return false
          })
            .catch(err => console.log(err))

        })
        .catch(err => console.log(err));
    };

    ourForm.addEventListener("submit", submitLoginForm);

  }]);
