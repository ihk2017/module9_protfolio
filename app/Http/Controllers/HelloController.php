<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HelloController {

    public function index() {
 
        echo 'Hello, World!';
    }
}


$controller = new HelloController();

$controller->index();
