<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/views/includes/header.view.php';
?>


    <main class="wrapper">

    <h1>Search results:<?=$body?></h1>
        <?php
        if(count($results)){

            foreach ($results as $comment) {

                echo '<div class="post-card" >
                    <a href="/controllers/InspectController.php?postId='.$comment->post_id.'" class="post-id">Related Post#'.$comment->post_id.'</a>
                    <h4>Post Title: '.$comment->title.'</h4>
                        <p class="post-title" >'.str_replace($body, $bold, $comment->body).'</p >
                </div >';
            }
        }
        else{
            echo '<h3>Results not found</h3>';
        }

        ?>


    </main>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/views/includes/footer.view.php';
?>