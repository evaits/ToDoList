<?php
    require 'config.php';

    $id = $_GET['id'];
    
    $sql = 'DELETE FROM `tasks` WHERE `id` = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$id]);

    echo '
    <script>
        window.close()
    </script>'

?>