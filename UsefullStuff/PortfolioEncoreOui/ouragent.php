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
            <li><a id="actual-nav-ul-li-a" href="./ouragent.php">Notre agent</a></li>
            <li><a href="./ourmissions.php">Nos missions</a></li>
            <li><a href="./contactus.php">Contactez-nous</a></li>
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
    <div class="ouragent-container">
        <div id="ouragent-container-left" class="ouragent-container-left">
            <h2 onclick="agentreveal()" id="ouragent-container-left h2" >Clique Ici</h2>        
        </div>
        <div class="ouragent-container-right">
            <h1 id="ouragent-container-right h1" >Terry Barillon</h1>
            <br>
            <p id="ouragent-container-right p" >Notre agent est un agent très expérimenté, il a déjà fait plusieurs missions et il a réussi toutes ses missions. Il est très intelligent et il est très fort. Il est très rapide et il est très agile. Il est très fort en combat et il est très fort en tir. Il est très fort en combat rapproché et il est très fort en combat à distance. Il est très fort en combat au corps à corps et il est très fort en combat à l'arme à feu. Il est très fort en combat à l'arme blanche et il est très fort en combat à mains nues. Il est très fort en combat à l'arme de jet et il est très fort en combat à l'arme de poing. Il est très fort en combat à l'arme de trait et il est très fort en combat à l'arme de siège. Il est très fort en combat à l'arme de chasse et il est très fort en combat à l'arme de défense. Il est très fort en combat à l'arme de guerre et il est très fort en combat à l'arme de destruction massive.</p>
        </div>
    </div>
</body>
</html>