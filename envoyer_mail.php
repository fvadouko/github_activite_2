<?php
$destinataire = "testemail@toutestfacile.com";
$expediteur   = "moi@monsite.com";
$reponse      = $expediteur;
echo "Ce script envoie un mail à $destinataire ".
     "en précisant que l'expediteur est $expediteur ".
     "et que la réponse doit être envoyée à $reponse";
mail($destinataire,
     "test email 1bis",
     "merci pour ton tutorial",
     "From: $expediteur\r\nReply-To: $reponse");
?>