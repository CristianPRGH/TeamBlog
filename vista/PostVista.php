<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista.css">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Upload post</h1>
        <hr>
    </div>
    <div class="center">
    <form method="post" action="../includes/post-add.php">
        <input type="text" name="title" placeholder="Introduce a title"><br>
        <textarea name="text" class="text" placeholder="Introduce text"></textarea><br>
        <input type="submit" name="send" value="Upload">
    </form>
    </div>
</body>

</html>