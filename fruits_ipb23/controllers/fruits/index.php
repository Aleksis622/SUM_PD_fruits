<?php

$select = "SELECT * FROM fruits";
$params = [];

if(isset($_GET["search_query"]) && $_POST["search_query"] !=""){

$search_query = "%" . $_GET["search_query"] . "%"; 

$select .=" WHERE name LIKE: nosaukums"; 

$params = ["nosaukums"=>$search_query] ;
}
$fruits = $db->query($select, $params)->fetchAll();








require "views/posts/index.view.php";