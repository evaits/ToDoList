<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>To Do List</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <h1 class="title" id="title">
                Daily To Do List
            </h1>

            <form action="add.php" method="POST" class="form">

                <input type="text" name="task" id="task" placeholder="What you want to do.." class="task-input">
                <button type="submit" name="send" class="btn">
                    Add
                </button>

            </form>

           <?php

                require 'config.php';

                echo '<ul class="do">';
                $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');

                while($row = $query->fetch(PDO::FETCH_OBJ)){
                        echo '<li class="table1"><input type="checkbox" name="" id="'.$row->id.'" class="acc"><label for="'.$row->id.'" class="ii">'.$row->task.'</label></li>';

                        echo '<li class="table2">
                        <a href="edit.php" class="delete-link" id="'.$row->id.'">
                            <img src="img/delete.png" alt="pictures" class="delete-img">
                        </a>
                        <label for="'.$row->id.'" class="ii">'.$row->task.'</label></li>';
                }
                echo '<ul class="do">'
                
           ?>
           
        </div>
        
           <div class="line"></div>

           <div class="footer">

                <p class="item" id="edit">Edit</p>

                <a href="delete.php">
                    <p class="clear">Clear All</p>
                </a>

            </div>

    </div>
    <script src="js/mai.js"></script>
</body>
</html>