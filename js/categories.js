/*
$(document).ready(function(){

});
*/
$(document).ready(function(){
$(".container .bar a").click(function(){
    $(".container .bar a").css("color","white");
    $(this).css({"color":"#f79100"});
});
$(".bdy1 a").click(function(){
    $(".bdy1 a").css("color","black");
    $(this).css("color","#f79100");
});
    $(".bdy2 div").slideDown(2000);
    $(".bdy2 div").css('display','inline-block');
});