<?php
/**
 * Created by IntelliJ IDEA.
 * User: Didier
 * Date: 11/11/2017
 * Time: 10:43 PM
 */

require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'includes.php';

$title = $_POST['title'];
$id = $_POST['id'];

Task::deleteTask($title,$id);