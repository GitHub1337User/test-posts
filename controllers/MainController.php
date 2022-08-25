<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/db/Database.php';
class MainController
{

    public function index(){


        $db = new Database();
        $posts = $db->query("SELECT * FROM Posts",array());
        return require_once $_SERVER['DOCUMENT_ROOT']."/views/index.view.php";

    }
}