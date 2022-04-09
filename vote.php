<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="node_modules/bootswatch/dist/lux/bootstrap.css">
    <title>Login</title>
</head>
 <body>
 <div class="container">
        <div class="alert alert-info">
            Sondage pour évaluer le contenu du cours PHP
        </div>
  <div class="container">
  <form action="validation.php" method="post" >
  <p>Comment trouvez vous le cours php? </p> 
  <div>
  <input class="form-check-input" type="radio"  name="Sondage" value="Bon"  >
  <label class="form-check-label" for="flexRadioDefault1">
    Bon
  </label>
</div>
<div>
  <input class="form-check-input" type="radio" name="Sondage" value="Moyen"  >
  <label class="form-check-label" for="flexRadioDefault2" >
    Moyen
  </label>
</div>
<div>
  <input class="form-check-input" type="radio"  name="Sondage" value="Mauvais">
  <label class="form-check-label" for="flexRadioDefault2" >
    Mauvais
  </label>
</div> <br>
<input type="submit" value="envoyer" class="btn btn-outline-primary">
 </form>
  </div> 
 </body>
</html>