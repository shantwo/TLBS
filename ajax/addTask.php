<?php
/**
 * Created by IntelliJ IDEA.
 * User: Didier
 * Date: 11/11/2017
 * Time: 6:10 PM
 */

require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'includes.php';

$title = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];
$priority = $_POST['priority'];
$userId = $_POST['userId'];

$taskToAdd = new Task(null, $title, $description, $date, null, null, $priority, null, null);

Task::addTask($taskToAdd);