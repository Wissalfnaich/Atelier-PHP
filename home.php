<?php
session_start();
if (isset($_POST['trash'])){
    $key=$_POST['key'];
    unset($_SESSION['note'][$key]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/ce61b18206.js" crossorigin="anonymous"></script>
    <title>Notes</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse coll" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="keep.php"><i class="fa-solid fa-pen"></i> Write A Note</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php"><i class="fa-solid fa-note-sticky"></i> My Notes</a>
                </li>

            </ul>
        </div>
    
</nav>
<h3 style="text-align:center;color: #4986c1;">My Notes </h3>
<br>
<?php
if (isset($_SESSION['note'])){
 foreach ($_SESSION['note'] as $indice=>$value) {

?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" style="display: inline-block">
<div class="card" style="width: 18rem; display: inline-block">
    <div class="card-body">
        <h5 class="card-title">Note <?=$indice?></h5>
        <p class="card-text"><?=$value?></p>
        <input type="hidden" name="key" value="<?=$indice?>">
        <button name="trash" type="submit" ><i class="fa-solid fa-trash-can"></i></button>

    </div>
</div>
    </form>
<?php
 }

 }
?>
</body>
</html>