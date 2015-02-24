<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<div class="jumbotron">
    <h1>Hello Welcome To My Blog!!!</h1>
</div>


<nav>
    <ul>
        <button><a class="btn btn-default" href="<?php echo $path . "post.php"?>" role="button">Blog Post</a>
    </ul>
    <ul>
        <button><a href="<?php echo $path . "register.php"?>">register here </a></button>
    </ul>
</nav>