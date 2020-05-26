window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("nav").style.fontSize = "15px";
        document.getElementById("nav").style.background = "none rgba(38, 40, 45, 0.9)";
        document.getElementById("nav").style.color = "white";
    } else {
        document.getElementById("nav").style.fontSize = "20px";
        document.getElementById("nav").style.background = "none";
    }
}
