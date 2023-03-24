<?php

use App\Application;


    require('vendor/autoload.php');
    include('env.php');


    $app = new Application;

    $app->run();