<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/controllers/MainController.php';
$action = new MainController();
$action->index();