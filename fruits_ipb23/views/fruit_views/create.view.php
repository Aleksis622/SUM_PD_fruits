
<?php require "views/components/header.php";?>

<body>
<h1>Izveido augli</h1>



<form method="POST">
 <label><input name = "name" /></label>
 
 <?php if(isset($errors["name"])) { ?>
       <p><?= $errors["name"] ?></p>
     <?php } ?>
<?= $_POST['name'] ?? ''  ?>
 <button> Izveidot </button>

</form>




<?php require "views/components/footer.php";?>
