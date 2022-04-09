<html>
<head>
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
<title>Données</title>
</head>
<body>
<?php


if ($_FILES['cin']) {
    $file= $_FILES['cin'];
    $newName = uniqid().$file['name'];
    $filename ='documents\cin'.$newName;
   
    move_uploaded_file($file['tmp_name'], $filename);
    }
?>
<div class="container">
    <p>Nom : <?= $_POST['nom']?></p>
    <p>Prénom : <?=$_POST['prenom']?></p>
    <p>Adresse : <?=$_POST['adresse']?></p>
    <p>Type du Sandwitch : <?=$_POST['type']?></p>
    <p>Quantité : <?=$_POST['nombre']?></p>
    <p>Ingrédients : <?=implode(' - ',$_POST['ingredients'])?></p>
    
    <?php
     
        if($_POST['nombre']<10)
         {
    ?>  
    <p>Prix : <?=$_POST['nombre']*4?> dinars</p>
        <?php } 
        else {
            ?>
            <p>Prix: <?=$_POST['nombre']*3.6?> dinars</p>  <?php     } ?>
            <?php 
            $file= $_FILES['cin'];
            ?>
            <img src="<?=$filename ?>" alt="cin">   


</div>

</body>
</html>