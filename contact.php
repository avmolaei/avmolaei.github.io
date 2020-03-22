<?php



if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $message = $_POST['message'];

    $mailto = "contact.avmolaei@gmail.com";
    $headers = "Envoyé depuis: ".$mailfrom; 
    $subject = "Nouveau message de ".$mailfrom;
    $txt    =  "Nouveau message de ".$name.":\n\n".$message;

    if(mail($mailto, $subject, $txt, $headers)){
        echo "<h1>Mail envoyé avec succès!\nVous serez contacté sous peu.";
    }
    else{
        echo "<h1>Il y a eu une erreur. Veuillez réessayer ultérieurement."
    }
    header("Location: index.php?mailsend");
}


?>