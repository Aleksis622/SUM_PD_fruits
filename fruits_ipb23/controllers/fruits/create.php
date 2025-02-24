<?php
$params = [];
$errors = [];
if(isset($_POST["name"]) && $_POST["name"] !=""){

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!isset($_POST["name"]) || strlen($_POST["name"]) < 2 || strlen($_POST["name"]) > 50) {
        $errors["name"] = "Saturam jābūt ievadītam vismaz 2 līdz 50 rakstzīmēm";
    }

    
    if (empty($errors)) {
        $sql = "INSERT INTO fruits (name) VALUES(:name)";
        $params = ["name" => $_POST["name"]];
        $db->query($sql, $params);

        header("Location: /");
        exit();
    }
}

$pageTitle ="Izveido augli";

require "views/fruit_views/create.view.php";
?>