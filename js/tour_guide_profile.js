$(document).ready(function(){
$(".port").click(function(){
    $(".bdy4").css("display","none");
    $(".bdyy4").slideDown(20);
    $(".hire").css("display","none");
    $(this).css("color","#f79100");
    $(".bdyy4 button").css("display","none");
    $(".about").css("color","white");
});
$(".about").click(function(){
    $(".bdyy4").css("display","none");
    $(".bdy4").slideDown(20);
    $(".hire").css("display","inline");
    $(this).css("color","#f79100");
    $(".port").css("color","white");
});
});