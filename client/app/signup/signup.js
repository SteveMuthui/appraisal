"use strict";

angular
  .module("appraisal.signup", ["ngRoute"])
  .config(["$routeProvider", function ($routeProvider) {
    $routeProvider.when("/signup", {
      templateUrl: "signup/signup.html",
      controller: "SignUpCtrl"
    });
  }
  ])

  .controller("SignUpCtrl", ["$scope", "$http", "$location", function ($scope, $http, $location) {
    let ourForm = document.getElementById("signUpForm");
    let url = "http://awesome.test/appraisal/api/user/create.php";
    let submitSignUpForm = function () {

      let formData = {
        firstName: $scope.firstName,
        lastName: $scope.lastName,
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
          console.log(result.data);
          // redirect to login page
          // if user has validated cookie then redirect to homepage
          window.location.href = "http://localhost:8000/#!/login"
        })
        .catch(err => console.log(err));
    };
    ourForm.addEventListener("submit", submitSignUpForm);
  }
  ]);
