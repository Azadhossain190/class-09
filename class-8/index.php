<?php
    session_start();
    // echo '<pre>';
    //     print_r($_SESSION['title_error']);
    // echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
    echo isset($_SESSION['msg']) ? $_SESSION['msg']:"";
        
    ?>
    <div class="container">

    <form action="./controller/postcontroller.php" method="POST" class="" >
        <input type="text" placeholder="Post Title" name="title" ><br>
        <?php
        echo isset($_SESSION['title_error']) ? $_SESSION['title_error']:"";
        echo '<br>';
        ?>
        <br>
        <input type="text" placeholder="Author name" name="author"><br>
        <?php
        echo isset($_SESSION['author_error']) ? $_SESSION['author_error']:"";
        echo '<br>';
        ?>
        
        <textarea placeholder="Post Description" name="description"></textarea><br>
        <?php
        echo isset($_SESSION['description_error']) ? $_SESSION['description_error']:"";
        echo '<br>';
        ?>
        
        <button type="submit">submit</button>
    </form>

    </div>
</body>
</html>
<?php
session_unset();
?>