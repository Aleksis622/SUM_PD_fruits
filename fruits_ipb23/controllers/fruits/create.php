<?php
$params = [];
$errors = [];
if(isset($_POST["name"]) && $_POST["name"] !=""){

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$sql = "INSERT INTO fruits (name) VALUES(:name)" ;

$params = ["name"=> $_POST["name"]];

$db->query( $sql,$params);

header("Location: /");

exit();

}
if( !isset($_POST["name"]) ||  strlen($_POST["name"]) == 0  || strlen( $_POST["name"]) > 50)  {
  
   $errors["name"] ="Saturam jābūt ievadītam vismaz 2 līdz 50 rakstzīmēm";
}

if(empty($errors)){
    require_once "views/posts/create.view.php";
   
}


$pageTitle ="Izveido augli";

require "views/posts/create.view.php";
?>