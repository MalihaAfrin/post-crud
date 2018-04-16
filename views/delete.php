<?php
include_once ("../vendor/autoload.php");

use Pondit\Facebook\Post\Post;
$post = new Post();
if (array_key_exists('id',$_GET) && !empty($_GET['id']) ){
    //$this->text=$_POST['text'];
    $post->setData($_GET);
    $post->deleteData();

}

?>
