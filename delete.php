<?php
    require 'config.php';
    $query = $pdo->query('TRUNCATE `tasks`');
    header('Location: /todolist');
?>