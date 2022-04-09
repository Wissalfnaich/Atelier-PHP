<?php
 
if (isset($_COOKIE['vote'])){
    echo "Vous avez déja voté : ".$_COOKIE['vote'].". Vous devez attendre 2 minutes.";
}
else{
   
    $vote = $_POST['Sondage'];
    setcookie('vote', $vote, time()+60*2);
    
    echo "Votre reponse est enregistrée, Merci";

}
?>