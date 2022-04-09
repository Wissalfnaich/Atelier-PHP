<?php
session_start();
//créer un tableau de note stocké dans la session
if (isset($_POST['submit']) ){
    $_SESSION['note'][]=htmlentities($_POST['note']);
    header('location:Home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Google keep</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/ce61b18206.js" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="keep.png" width="30" height="30" alt=""> Welcome to google keep
  </a>
        <div class="collapse navbar-collapse coll" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Note.php"><i class="fa-solid fa-pen"></i> Write A Note</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Home.php"><i class="fa-solid fa-note-sticky"></i> My Notes</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="container">
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
       <div>
       <textarea class="form-control note" rows="5" name="note" placeholder="Note"></textarea>
</div>
    <button type="submit" class="btn btn-outline-secondary " name="submit" ><i class="fa-solid fa-thumbtack"></i>Ajouter
    </button>

   
</form>
</div>


</body>


