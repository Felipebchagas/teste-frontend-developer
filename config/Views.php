<?php

namespace Classes;


Class Views {

    public static function render($filename) {
        include('resources/views/' . $filename . '.php');

    }
}