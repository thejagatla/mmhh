
var app = angular.module("mmhh", ['ngRoute','ngAnimate']);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "home.html",
    })
    
    .when("/members", {
        templateUrl : "members.html",
       
    })
    .when("/contact", {
        templateUrl : "contact.html",
       
    });
});