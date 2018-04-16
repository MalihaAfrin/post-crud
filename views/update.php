<?php
include_once ("../vendor/autoload.php");

use Pondit\Facebook\Post\Post;
$post=new Post();
$post->setData($_POST);
$post->updateData();

?>