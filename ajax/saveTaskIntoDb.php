<?php
/**
 * Created by IntelliJ IDEA.
 * User: Didier
 * Date: 11/30/2017
 * Time: 7:31 AM
 */

require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'includes.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];
$priority = $_POST['priority'];

Task::updateTask($id,$title,$description,$date,$priority);

