<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="JavaScript.JS"></script>
</head>
<body>
    <nav>
        <div class="logo">
            <h4>Logo</h4>
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
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
</body>
</html>