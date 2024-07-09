<!DOCTYPE html>
<html lang="en">
<?php
require "../includes/post-inc.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Blog</h1>
        <a href="user-logout.php">Log out</a>
    </header>
    
        <a href="PostVista.php">
            <h3>Post: </h3>
        </a>
        <!-- foreach to print DB data -->
        <div class="container">
            <?php
            /* print_r($result); */
            foreach ($result as $post) {
                ?>
                <div class="item">
                    <div id="title"><?= $post['titulo'] ?></div>
                    <div id="text"><?= $post['text'] ?></div>
                    <div id="date"><?= $post['data'] ?></div>
                </div>
                <?php
            }

            ?>
        </div>
        <a href="PostVista.php"><img src="https://icons.iconarchive.com/icons/rafiqul-hassan/blogger/512/Plus-icon.png" ></img></a>
        <hr>
        <footer>Footer</footer>
</body>

</html>