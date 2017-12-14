<?php
/**
 * Created by IntelliJ IDEA.
 * User: Didier
 * Date: 11/23/2017
 * Time: 7:46 PM
 */

require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'includes.php';


$id = $_POST['id'];

$task = Task::getTaskById($id);

echo json_encode($task);