
<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create your post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?> ">
    <div>
        <label for="title">Title: </label>
        <input type="text" name="Title" />
    </div>

    <div>
        <label for="post">post: </label>
        <textarea name="post"></textarea>
    </div>
    
    <div>
        <button type="submit">submit</button>
    </div>

</form>