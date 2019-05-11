$(document).ready(function(){
$(".port").click(function(){
    $(".bdy4").css("display","none");
    $(".bdyy4").slideDown(2000);
    $(this).css("color","#f79100");
    $(".bdyy4 button").css("display","none");
    $(".about").css("color","white");
});
$(".about").click(function(){
    $(".bdyy4").css("display","none");
    $(".bdy4").slideDown(2000);
    $(this).css("color","#f79100");
    $(".port").css("color","white");
});
});