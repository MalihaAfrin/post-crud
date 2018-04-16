<?php
include_once ("../vendor/autoload.php");

use Pondit\Facebook\Post\Post;
$post=new Post();
$post->setData($_POST);
$results = $post->searchData();
var_dump($results);

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<header>
    <h1 class="text-center" style="background-color:darkblue;color: ghostwhite;padding: 20px">facebook post</h1>
</header>

<section id="table">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <?php
                if (isset($_SESSION['message'])){
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
                ?>
                <table class="table-border">
                    <thead>
                        <tr>

                            <th scope="col">id</th>
                            <th scope="col">post</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($results as $result){   ?>
                            <tr>
                                <td><?php echo $result['id'];?></td>
                                <td><?php echo $result['postdel'];?></td>

                             </tr>
                        <?php
                            } ?>




                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
