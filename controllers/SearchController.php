<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/db/Database.php';

class SearchController
{
    public function __construct(){
        $this->index();
    }
    public function index(){

        if (isset($_POST['search']) && strlen($_POST['search'])>=3)
        {
            $db = new Database();

            $body = $_POST['search'];

            $results = $db->query('SELECT Comments.*, Posts.title FROM `Comments`
            INNER JOIN Posts ON Posts.id = Comments.post_id
            WHERE Comments.body LIKE :body',array("%$body%"));
            $bold = '<span class="founded">'.$body.'</span>';
            return require_once $_SERVER['DOCUMENT_ROOT']."/views/search.view.php";
        }
        header('Location: /');

    }

}
new SearchController();