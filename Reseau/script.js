function scrollFunction() {
    document.getElementById('title').style.display='none';
    document.getElementById('banner').style.opacity='1';
}
function bouger() {
    window.onscroll = scrollFunction;
}

setTimeout(bouger, 3000);

function ouvrirliens() {
    window.open("./firstlink.html", "Get Rick Rolled, or not", "width = " + window.screen.width + ", height = " + window.screen.height + "");
}

function copy() {
    var copyText = "guilhem.bonnefous@etu.u-bordeaux.fr"
    navigator.clipboard.writeText(copyText);
    alert("L'adresse e-mail a bien été copiée dans le presse-papiers.");
}

function bigImg(x) {
    x.style.width = "60%";
  }
  
function normalImg(x) {
    x.style.width = "50%";
}

function obigImg(x) {
    x.style.width = "120%";
}

function onormalImg(x) {
    x.style.width = "100%";
}

function mbigImg(x) {
    x.style.width = "70%";
    x.style.marginLeft = "15%";
}

function mnormalImg(x) {
    x.style.width = "50%";
    x.style.marginLeft = "25%";
}

function titleHere() {
    document.getElementById('title').style.display = "block";
    document.getElementById('banner').style.opacity='0.5';
}
