<?php
include_once ("../vendor/autoload.php");

use Pondit\Facebook\Post\Post;
$post=new Post();
$post->setData($_GET);
$results = $post->showData();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="css_jss/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
<div class="jumbotron">
    <a href="index.php"><button class="btn btn-lg btn-success" href="index.php"> List</button></a>
    <?php
    if (isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>

    <form action="update.php" method="post">

        <input type="hidden" name="id" value="<?php echo $results['id'] ?>" id="id">
        <input type="text" name="postdel" value="<?php echo $results['postdel']?>" id="postdel">

        <input type="submit" value="Update">

    </form>

</div>
</body>
</html>
