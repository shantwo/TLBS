<?php
//Including all the classes files
    include __DIR__.DIRECTORY_SEPARATOR.'includes.php';
    $tasks = Task::getAllArchivedTask();
?>

<html>
<head>
    <title>TASK LIST BY SHANY | TLBS</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css?family=Saira" rel="stylesheet">
    <link rel="stylesheet" href="libraries/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
<script src="js/RedirectIfNotConnected.js"></script>
<nav class="black-bg">
    <span class="logo white-txt"><a href="signup.php">TLBS</a></span>
    <span class="menu-button" id="button-addTask">
                <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                Add a task
            </span>
    <span class="menu-button" id="">Take a note</span>
</nav>
<main class="container" id='taskContainer'>
    <?php foreach($tasks as $task): ?>
        <article
            class="task-container"
            data-title="<?= $task['title'] ?>"
            data-id="<?= $task['id'] ?>">
                <span class="task-title">
                    <i class="fa fa-tasks <?= Helpers::ChoosePriorityColorClass($task['priority']) ?>" aria-hidden="true"></i>
                    <span data-title="title-container" class="bold">
                        <?= $task['title'] ?>
                    </span>
                    <span class="task-date grey-txt">
                        | Created : <?= $task['date'] ?>
                        | Archived : <?= $task['closure'] ?>
                    </span>
                    <span class="task-description grey-txt">
                        <?= $task['description'] ?>
                    </span>
                </span>
            <span
                class="f-right pointer"
                data-name="killTask"
                data-title="<?= $task['title'] ?>"
                data-id="<?= $task['id'] ?>">
                    <i class="fa fa-trash black-txt" aria-hidden="true"></i>
                </span>
        </article>
    <?php endforeach; ?>
</main>
<script src="js/killTask.js"></script>
</body>
</html>
