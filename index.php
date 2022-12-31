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
                <button type="submit" name="send" id="btn" class="btn">
                    Add
                </button>

            </form>

           <?php

                require 'config.php';

                echo '<div class="table"><ul class="do" id="ch">';
                $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');

                while($row = $query->fetch(PDO::FETCH_OBJ)){
                        echo '<li class="table1"><input type="checkbox" name="" id="'.$row->id.'" class="acc"><label for="'.$row->id.'" class="ii">'.$row->task.'</label></li>';


                        echo '<li class="table2" id="m'.$row->id.'">
                        <a href="edit.php?id='.$row->id.'" class="delete-link" target="_blank" id="'.$row->id.'">
                            <img src="img/delete.png" alt="pictures" class="delete-img" id="m'.$row->id.'">
                        </a>
                        <label for="m'.$row->id.'" 
                        id="m'.$row->id.'" class="ii">'.$row->task.'</label></li>';
                        
                }
                echo '<ul class="do">
                </div>'
                
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cookiesjs/1.4.2/cookies.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/mai.js"></script>
    <script src="js/main.js"></script>
</body>
</html>