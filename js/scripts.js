$(function(){

	console.log("It's working");

});

window.sr = ScrollReveal();
sr.reveal('.servce-flex', { duration: 600 });
sr.reveal('.about-section', { duration: 600 });

$(document).ready(function(){
    $("#sticker").sticky({topSpacing:0});
  });