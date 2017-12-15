<?php
//Including all the classes files
include __DIR__.DIRECTORY_SEPARATOR.'includes.php';
//$tasks = Task::getAllTask();
?>

<script src="js/RedirectIfNotConnected.js"></script>

<html>
<head>
    <title>TASK LIST BY SHANY | TLBS</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css?family=Saira" rel="stylesheet">
    <link rel="stylesheet" href="libraries/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
<nav class="black-bg">
    <span class="logo white-txt"><a href="signup.php">TLBS</a></span>
    <span class="menu-button" id="button-addTask">
                <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                Add a task
            </span>
    <span class="menu-button" id="">Take a note</span>
    <span class="menu-button" id=""><a href="archive.php" class="white-txt"> <i class="fa fa-archive menu white-txt" aria-hidden="true"></i>Archives</a></span>
</nav>
<script src="js/getAllTasks.js"></script>
<main class="container" id='taskContainer'>
<!--    --><?php //foreach($tasks as $task): ?>
<!--        <article-->
<!--            class="task-container"-->
<!--            data-title="--><?//= $task['title'] ?><!--"-->
<!--            data-id="--><?//= $task['id'] ?><!--">-->
<!--                <span class="task-title">-->
<!--                    <i class="fa fa-tasks --><?//= Helpers::ChoosePriorityColorClass($task['priority']) ?><!--" aria-hidden="true"></i>-->
<!--                    <span data-title="title-container" class="bold">-->
<!--                        --><?//= $task['title'] ?>
<!--                    </span>-->
<!--                    <span class="task-date grey-txt">-->
<!--                        | Created : --><?//= $task['date'] ?>
<!--                    </span>-->
<!--                    <span class="task-description grey-txt">-->
<!--                        --><?//= $task['description'] ?>
<!--                    </span>-->
<!--                </span>-->
<!--            <span-->
<!--                class="f-right pointer"-->
<!--                data-name="editTask"-->
<!--                data-title="--><?//= $task['title'] ?><!--"-->
<!--                data-id="--><?//= $task['id'] ?><!--">-->
<!--                    <i class="fa fa-cog black-txt" aria-hidden="true"></i>-->
<!--                </span>-->
<!--            <span-->
<!--                class="f-right pointer"-->
<!--                data-name="deleteTask"-->
<!--                data-title="--><?//= $task['title'] ?><!--"-->
<!--                data-id="--><?//= $task['id'] ?><!--">-->
<!--                    <i class="fa fa-file-archive-o black-txt" aria-hidden="true"></i>-->
<!--                </span>-->
<!--        </article>-->
<!--    --><?php //endforeach; ?>
</main>
<div id="Modal-addTask" class="modal-bg">
    <div class="modal" id="modal">
        <div class="modal-title">
            <span class="modal-title-text" id="modalTitle">Add a task to your list</span>
            <span class="close" id="button-close">&times;</span>
        </div>
        <div class="modal-content">
            <label for="taskTitle" class="modal-label">Title</label>
            <input id="taskTitle" class="modal-input" placeholder="Please enter the title of your task"><br>
            <label for="taskDescription" class="modal-label">Description</label>
            <textarea name="taskDescription" id="taskDescription" class="modal-input t-area"></textarea><br>
            <label class="modal-label" for="taskDate">Date</label>
            <input type="date" name="taskDate" id="taskDate" value="<?= date('Y-m-d') ?>">
            <label class="modal-label modal-double-label" for="taskPriority">Priority</label>
            <?= Helpers::buildPrioritySelect() ?>
            <span class="modal-button" id="validate-task">Confirm</span>
            <span class="modal-button" id="edit-task" style="display:hidden">SAVE</span>
        </div>
    </div>
</div>
<script src="js/getAllTasks.js"></script>
<script src="js/addTask.js"></script>
<script src="js/deleteTask.js"></script>
<script src="js/editTask.js"></script>
</body>
</html>
