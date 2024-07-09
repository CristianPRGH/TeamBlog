<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require "../includes/post-find.php";
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
        <?php
        if (isset($_SESSION["userid"])) {
        ?>
            <a href="../includes/user-logout.php">Log out</a>
        <?php
        }else{
        ?>
        <a href="LoginVista.php">Log in</a>
        <?php
            }
        ?>
        <hr>
    </header>

    <h3>Post: </h3>

    <div class="container">
        <?php
        /* print_r($result); */
        foreach ($result as $post) {
            ?>
            <div class="item">
                <div id="title"><?= $post['titulo'] ?></div>
                <div id="text"><?= $post['text'] ?></div>
                <div id="img"><img src="<?=$post['img']?>"></div>
                <div id="date"><?= $post['data'] ?></div>
            </div>
            <?php
        }

        ?>
    </div>
    <?php
    if (isset($_SESSION["userid"])) {

        ?>
        <a href="PostVista.php"><img
                src="https://icons.iconarchive.com/icons/rafiqul-hassan/blogger/512/Plus-icon.png"></img></a>
    <?php
    }
    ?>
    <hr>
    <footer>Footer</footer>
</body>

</html>