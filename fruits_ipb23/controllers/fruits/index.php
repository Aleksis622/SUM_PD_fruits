<?php

$select = "SELECT * FROM fruits";
$params = [];

if(isset($_GET["search_query"]) && !empty($_GET["search_query"])){

$search_query = "%" . $_GET["search_query"] . "%"; 

$select .=" WHERE name LIKE :nosaukums"; 

$params = ["nosaukums"=>$search_query] ;
}
$fruit = $db->query($select, $params)->fetchAll();








require "views/fruit_views/index.view.php";