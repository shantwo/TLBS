<?php
/**
 * Created by IntelliJ IDEA.
 * User: Didier
 * Date: 11/11/2017
 * Time: 10:43 PM
 */

require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'includes.php';

$email = $_POST['email'];
$password = $_POST['password'];

$User = new User();
$User->setEmail($email);
$User->setPassword(User::hashPassword($password));

User::registerNewUser($User);

print_r('user Registered in ajax');