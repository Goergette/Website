<?php

if (isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $nummer=$_POST['telefonnummer'];
    $message = $_POST['comment'];
    
 if( !empty($name) || !empty($email) || !empty($comment) || ! empty ($adresse) || !empty($telefonnummer)){
        
         if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "le mail n est pas valide";

        }
        
        if else(!preg_match("/^[0-9]*$/",$nummer)) {
            $nummerErr = "le numero  n est pas valide ";
        }
            
        if else(ctype_alpha($name)===false){
            $nameErr = "le nom n est pas valide ,entrez uniquement que des lettre";
        }
        
         if else(!preg_match("/^[a-zA-Z ]*[0-9]*[0-9]*[a-zA-Z]$/",$adresse)) {
            $adressErr = "le nom n est pas valide ,entrez uniquement que des lettre";
        }
            
        else{
    
            $to="gigie.nobe@yahoo.de";
            $subject="vous avez recu un message de votre site internet de.  $name";

            $body="se si est un message test .svp ne repondez pas a ce message. \n\n";
            $email_de = "de : $email";


            mail($to,$subject,$body,$email_de);
            echo "message envoyez <a href='babi.html'> clikez ici</a>pour envoyez un autre";
            }
        }else{
        
        $msg="remplissez toutes les  cases infos svp";
        $msgclass="alert-danger";

    }
}

?>