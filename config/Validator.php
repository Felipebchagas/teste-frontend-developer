<?php

namespace Classes;

class Validator {

    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;
    }

    public static function validatePhone($phone) {

       return  preg_match('/^\(?\d{2}\)?[- ]?\d{4,5}[- ]?\d{4}$/', $phone) ? true : false;
    }

    public static function validateName($name) {
        
        return (strlen($name) >= 1 ) ? true : false;
    }

    public static function validaSubject($msg) {
        
        return (strlen($msg) >= 2 ) ? true : false;
    }
}

