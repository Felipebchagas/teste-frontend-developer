<?php

namespace App\Http\Controllers;

use Classes\Views;
use Classes\DataBase;
use Classes\Validator;
use App\Models\User;

class HomeController
{

    public function index()
    {
        if (isset($_POST['email'])) {

            $this->store($_REQUEST);
            die();
        }

        Views::render('home');
    }



    public function store($request)
    {
        $name = trim($request['name']);
        $email = trim($request['email']);
        $phone = trim($request['phone']);
        $subject = trim($request['message']);

        $response = [];




        if(Validator::validateName($name) && Validator::validateEmail($email) && Validator::validatePhone($phone) && Validator::validaSubject($subject) ) {
            if (!User::userExist($email)) {
                $pdo = DataBase::connect()->prepare('INSERT INTO `users`(`name`, `email`, `phone`, `subject`) VALUES (?,?,?,?)');
                $pdo->execute(array($name, $email, $phone, $subject));
                echo json_encode(['201' => "Cadastrado com sucesso!"]);           
            } else {
                echo json_encode(['201' => "Recebemos sua mensagem e já vamos entrar em contato."]);  
            }
        } else {

            if(!Validator::validateName($name)) {
                $response['emptyName'] = "Informe o seu lindo nome.";
            }

            if(!Validator::validateEmail($email)) {
                $response['invalidEmail'] = "Por favor, informe um e-mail válido.";
            }
    
            if(!Validator::validatePhone($phone)) {
                $response['invalidPhone'] = "Por favor, informe um telefone válido.";
            }

            if(!Validator::validaSubject($subject)) {
                $response['emptyMsg'] = "Nos conte como podemos te ajudar.";
            }

              echo json_encode($response);
        }       
    }
}
