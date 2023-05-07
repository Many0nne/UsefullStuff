<?php 
/*
$firstname = htmlspecialchars(filter_input(INPUT_POST, "fname"));
$lastname = htmlspecialchars(filter_input(INPUT_POST, "lname"));
$email = htmlspecialchars(filter_input(INPUT_POST, "email"));
$message = htmlspecialchars(filter_input(INPUT_POST, "subject"));

$to = "terry.barillon@terry-barillon.fr";
$subject = "Confidentiel";
$txt = "Bonjour, je m'appelle $firstname $lastname et je souhaite vous contacter pour vous dire que $subject. Mon adresse email est $email.";

if (mail($to,$subject,$txt)) {
    echo "Email envoyé avec succès.";
} else {
    echo "Erreur lors de l'envoi de l'email.";
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="JavaScript.JS"></script>
</head>
<body>
    <nav>
        <div class="logo">
            <h4>Confidentiel</h4>
        </div>
        <ul class="nav-links">
            <li><a href="./mainpage.php">Bâtiment principal</a></li>
            <li><a href="./ouragent.php">Notre agent</a></li>
            <li><a href="./ourmissions.php">Nos missions</a></li>
            <li><a id="actual-nav-ul-li-a" href="./contactus.php">Contactez-nous</a></li>
        </ul>
        <div onclick='ClickBurger()' id="burger" class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div id="burger-menu" class="burger-menu">
            <ul id="burger-menu-links" class="burger-menu-links">
                <li><a onclick="CloseBurger()">&times;</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!--
    <div class="contactus">
        <form  action="contactus.php" method="POST">
            <span>
                Vous,
                <input required type="text" id="fname" name="firstname" placeholder="Votre prénom..">
                
                <input required type="text" id="lname" name="lastname" placeholder="Votre nom..">
                , souhaitez contactez notre agent avec l'indentitée suivante :
                <input required type="email" id="email" name="email" placeholder="Votre email..">
                . Cela dans le but de communiquer le message suivant :
                <textarea required id="subject" name="subject" placeholder="Ecrivez votre message.."></textarea>

            </span>
            <button type="submit" value="Envoyer">Envoyer</button>
        </form>
    </div>
    -->
</body>
</html>