<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/views/includes/header.view.php';
?>


    <main class="wrapper">
        <?php
            if(count($post)){
                echo '<div class="post-card">
                <h1 class="post-id" >Post#'.$post[0]->id.'</h1>
                        <h3 class="post-title" >'.$post[0]->title.'</h3>
                        <p>'.$post[0]->body.'</p>
                        <b>Author: #'.$post[0]->user_id.'</b>
                </div >';

                if(count($comments)){
                    echo '<h3>Comments</h3>';
                    echo '<div class="comments">';
                        foreach ($comments as $comment){
                            echo '<div class="comment">
                                        <h5>'.$comment->name.'</h5>
                                        <h6>'.$comment->email.'</h6>
                                        <p>'.$comment->body.'</p>
                                    </div>';
                        }
                    echo'</div>';
                }
                else{
                    echo '<h3>There are no comments</h3>';
                }
            }
            else{
                echo '<h1>404 Not Found</h1>';
            }
        ?>


    </main>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/views/includes/footer.view.php';
?>