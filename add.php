<?php
    $task = $_POST['task'];
    if($task == '') {
        header('Location: /todolist');
        echo 'Write task...';
        exit();
    }

    require 'config.php';

    $sql = 'INSERT INTO tasks(task) VALUES(:task)';
    $query = $pdo->prepare($sql);
    $query->execute(['task' => $task]);

    header('Location: /todolist');
?>