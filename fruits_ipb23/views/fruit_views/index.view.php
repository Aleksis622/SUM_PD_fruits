<?php require "views/components/header.php"; ?>

<body>
    <h1>Augļi</h1>
    <?htmlspecialchars($fruit["name"])?>
 <form>
 <input name='search_query' value = '<?= $_GET["search_query"] ??""?>'name='name' >

 <button> Meklēt </button>

</form>

<?php if(count($fruit) == 0  ){?>
    <p> Not found</p>
<?php } ?>


<ul>
<?php foreach($fruit as $fruit) { ?>
     <li><a href ="show?id=<?=$fruit["id"]?>"> <?=  $fruit["name"]  ?></li>} <?php } ?>
</ul>
<?php require "views/components/footer.php";?>
