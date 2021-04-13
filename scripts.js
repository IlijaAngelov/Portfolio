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

$(document).ready(function(){

    $("#project1").mouseenter(function() {
        $(this).find('div').css("display", "none");
        $(this).append("<div id='tech_used_cms' class='center' style='height: 200px'><h1>CMS</h1> <br> <b>Technologies Used:</b> <br> HTML, CSS, Javascript, jQuery, Bootstrap <br> PHP, MySQL</div>");
    });
    $("#project1").mouseleave(function() {
        $('#tech_used_cms').remove();
        $(this).find('div').css("display", "block");
        $(this).find('.project-links').css("display", "flex");
    });

    $("#project2").mouseenter(function(){
        $(this).find('div').css("display", "none");
        $(this).append("<div id='tech_used_memory' class='center' style='height: 200px'><h1>Memory Game</h1> <br> <b>Technologies Used:</b> <br> HTML, CSS, Javascript</div>");
    });

    $("#project2").mouseleave(function() {
        $('#tech_used_memory').remove();
        $(this).find('div').css("display", "block");
        $(this).find('.project-links').css("display", "flex");
    });

    $("#project3").mouseenter(function(){
       $(this).find('div').css("display", "none");
       $(this).append("<div id='tech_used_tetris' class='center' style='height: 200px'><h1>Basic Tetris</h1> <br> <b>Technologies Used:</b> <br> HTML, CSS, Javascript</div>");
    });

    $("#project3").mouseleave(function() {
        $('#tech_used_tetris').remove();
        $(this).find('div').css("display", "block");
        $(this).find('.project-links').css("display", "flex");
    });


});
