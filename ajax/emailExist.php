<?php
require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'includes.php';
$email = $_POST['email'];

print_r(User::CheckIfEmailExist($email));