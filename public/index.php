<?php
// require rtrim(getcwd(), "public") . 'core/helpers.php';
require rtrim(getcwd(), "public") . 'vendor/autoload.php';
require local('core/bootstrap');

use App\Core\{Router, Request};

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
