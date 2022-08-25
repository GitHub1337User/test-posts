<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/db/Database.php';

class InspectController{

    public function __construct(){
        $this->index();
    }

    public function index(){

        if(!empty($_GET['postId'])){
            $db = new Database();
            $post_id = $_GET['postId'];
            $post = $db->query('SELECT * FROM Posts WHERE id =:id',array($post_id));
            $comments = $db->query('SELECT * FROM Comments WHERE post_id= :id',array($post_id));

            return require_once $_SERVER['DOCUMENT_ROOT']."/views/inspect.view.php";
        }
        header('Location: /');
    }
}
new InspectController();