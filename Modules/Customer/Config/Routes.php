<?php

//...  

$routes->group("customer", ["namespace" => "\Modules\Customer\Controllers"], function ($routes) {

    // welcome page - URL: /student
    $routes->get("/", "Home::index");
    $routes->get("/(:any)", "Home::$1");

    // other page - URL: /student/other-method
    // $routes->get("other-method", "AdminController::otherMethod");
});

$routes->group("customer/dashboard", ["namespace" => "\Modules\Customer\Controllers"], function ($routes) {

    // welcome page - URL: /student
    $routes->get("/", "Dashboard::index");
    $routes->get("/(:any)", "Dashboard::$1");

    // other page - URL: /student/other-method
    // $routes->get("other-method", "AdminController::otherMethod");
});
