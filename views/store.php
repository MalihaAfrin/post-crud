<?php
include_once ("../vendor/autoload.php");

use Pondit\Facebook\Post\Post;
$post = new Post();
if (array_key_exists('text',$_POST) && !empty($_POST['text']) ){
    //$this->text=$_POST['text'];
    $post->setData($_POST);
     $post->storeData();

}

?>
