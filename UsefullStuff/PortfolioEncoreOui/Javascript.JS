var HandPrint = document.getElementById("PutYourHand");

HandPrint.onclick = function IdentityVerification() {
    window.location.href = "./scanning.php";
}

function ClickBurger() {
    var x = document.getElementById("burger-menu");

    x.style.display = "block";
}

function CloseBurger() { 
    var x = document.getElementById("burger-menu");

    x.style.display = "none";
}

function agentreveal() {
    var x = document.getElementById("ouragent-container-left");
    var y = document.getElementById("ouragent-container-left h2");
    var z = document.getElementById("ouragent-container-right h1");
    var a = document.getElementById("ouragent-container-right p");

    x.style.background = "url(./images/agents/Terry_Barillon) no-repeat center";
    y.style.display = "none";
    z.style.filter = "blur(0px) drop-shadow(0 0 20px white) drop-shadow(0 0 60px white) drop-shadow(0 0 120px white)";
    z.style.transition = "0.4s";
    a.style.filter = "blur(0px)";
    a.style.transition = "0.4s";
}