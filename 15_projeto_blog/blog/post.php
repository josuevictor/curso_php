<?php
include_once("templates/header.php");

    if(isset($_GET['id'])){

        $post_id = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $post_id){
                $currentPost = $post;
            }
        }


    }

?>

    <h1><?= $currentPost['title'] ?></h1>
<?php

include_once("templates/footer.php");

?>