<?php require "views/components/header.php"; ?>

<body>
    <h1>Augļi</h1>
    <?htmlspecialchars($fruits["name"])?>
 <form>
 <input name='search_query' value = '<?= $_GET["search_query"] ??""?>'name='name' >

 <button> Meklēt </button>

</form>

<?php if(count($fruits) == 0  ){?>
    <p> "Not found"</p>
}<?php } ?>


<ul>
<?php foreach($fruits as $fruits) { ?>
     <li><a href ="show?id=<?=$fruits["id"]?>"> <?=  $fruits["name"]  ?></li>
} <?php } ?>
</ul>
<?php require "views/components/footer.php";?>
