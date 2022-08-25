<?php
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
return [
    "host"=>"localhost",
    "db_name"=>"post_db",
    "username"=>"root",
    "password"=>"root",
    "charset"=>"utf8",
    "opt"=>$options

];