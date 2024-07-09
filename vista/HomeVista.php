
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
    </header>
    <div>
        <a href="PostVista.php">
            <h3>Post: </h3>
        </a>
    <!-- foreach to print DB data -->
    <div class="container"> 
    <?php
        /* print_r($result);
 */
        foreach ($result as $post) {
            
        
    ?>
    
<div class="item"> 

<div  id="title"><?= $post['titulo']?></div>
<div   id="text"><?= $post['text']?></div>
<div   id="date"><?= $post['data']?></div>
</div>
<?php
}

?>
 </div>    
 <span><a href="PostVista.php">See more posts</a></span>
    <hr>
    <footer>Footer</footer>
</body>

</html>

<!-- <div class="item"><div id="title">Post 1: </div><br>
            <div id="text"></div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt ante eros, id iaculis lectus
            interdum vel. Vestibulum pellentesque facilisis dolor, at varius ante placerat non.
        
        </div>
        <div class="item"><strong>Post 2: </strong><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt ante eros, id iaculis lectus
            interdum vel. Vestibulum pellentesque facilisis dolor, at varius ante placerat non.
        </div>
        <div class="item"><strong>Post 3: </strong><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt ante eros, id iaculis lectus
            interdum vel. Vestibulum pellentesque facilisis dolor, at varius ante placerat non.
        </div>
        <div class="item"><strong>Post 4: </strong><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt ante eros, id iaculis lectus
            interdum vel. Vestibulum pellentesque facilisis dolor, at varius ante placerat non.Pellentesque habitant
            morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam purus orci, interdum non
            semper in, tristique non ipsum.
        </div>
        <div class="item"><strong>Post 5: </strong><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt ante eros, id iaculis lectus
            interdum vel. Vestibulum pellentesque facilisis dolor, at varius ante placerat non.
        </div>
        <div class="item"><strong>Post 6: </strong><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt ante eros, id iaculis lectus
            interdum vel. Vestibulum pellentesque facilisis dolor, at varius ante placerat non.
        </div>
        <div class="item">Post 7: <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt ante eros, id iaculis lectus
            interdum vel. Vestibulum pellentesque facilisis dolor, at varius ante placerat non.
        </div>
        <div class="item"><strong>Post 8: </strong><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt ante eros, id iaculis lectus
            interdum vel. Vestibulum pellentesque facilisis dolor, at varius ante placerat non.
        </div>
        <div class="item"><strong>Post 9: </strong><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt ante eros, id iaculis lectus
            interdum vel. Vestibulum pellentesque facilisis dolor, at varius ante placerat non.
        </div>
         -->  <!--   </div> -->