<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/db/Database.php';
class DataController
{

    public function __construct(){
        $this->index();
    }
    public function index(){

        $posts = file_get_contents("https://jsonplaceholder.typicode.com/posts");
        $comments = file_get_contents("https://jsonplaceholder.typicode.com/comments");
        $posts = json_decode($posts);
        $comments = json_decode($comments);
        $db = new Database();
        $db->query("DELETE FROM Comments",array());
        $db->query("DELETE FROM Posts",array());

        foreach ($posts as $post){
            $db->execute("INSERT INTO `Posts` (`id`,`title`,`body`,`user_id`) VALUES (:id,:title, :body, :user_id)",
                array($post->id,$post->title,$post->body,$post->userId));

        }
        foreach ($comments as $comment){
            $db->execute("INSERT INTO `Comments` (`id`,`name`,`body`,`email`,`post_id`) VALUES (:id, :name, :body, :email,:post_id)",
                array($comment->id,$comment->name,$comment->body,$comment->email,$comment->postId));
        }
        $_SESSION['flash'] = 'Загружено '.count($posts).' записей и '.count($comments).' комментариев';
        header('Location: /');
    }
}
new DataController();