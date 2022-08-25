<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/views/includes/header.view.php';
if (isset($_SESSION['flash'])) {
    echo '<div class="alert">'.$_SESSION['flash'].'</div>';
    unset($_SESSION['flash']);
}
?>

<main class="wrapper">

    <?php
        foreach ($posts as $post) {

           echo '<div class="post-card" >
                    <h3 class="post-id" > Post#'.$post->id.'</h3>
                        <a href="/controllers/InspectController.php?postId='.$post->id.'" class="post-title" >'.$post->title.'</a >
                </div >';
    }
    ?>


</main>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/views/includes/footer.view.php';
?>