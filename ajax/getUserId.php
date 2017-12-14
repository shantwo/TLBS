<?php
/**
 * Created by IntelliJ IDEA.
 * User: Didier
 * Date: 11/11/2017
 * Time: 6:10 PM
 */

require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'includes.php';

$email = $_POST['email'];

print_r(json_encode(User::getUserId($email)));