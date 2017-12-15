<?php

require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'includes.php';

$email = 'jonathan.lopezdonato@neos.lu';
$password = '123Neos357';

//$email = $_POST['email'];
//$password = $_POST['password'];
//print_r($password);


$emailChecker = false;
$passwordChecker = false;

$emailExistence = User::CheckIfEmailExist($email);
//print_r($emailExistence);

if($emailExistence['usr_email'] === $email){
    $emailChecker = true;
//    print_r('email OK');
}


if(password_verify($password, $emailExistence['usr_password'])){
    $passwordChecker = true;
//    print_r('password OK');

}

if ($emailChecker && $passwordChecker){
    print_r('OK');
}else{
    print_r('not OK');
}