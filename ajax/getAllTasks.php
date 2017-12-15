<?php
require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'includes.php';

$user = $_POST['email'];

$tasks = Task::getAllTask($user);

echo (json_encode($tasks));
?>
