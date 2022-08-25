

$(document).ready(function () {
    $(".primary-menu li").hover(function () {
         $(this).siblings().find('ul').slideUp(400);
         $(this).find('ul').slideDown(400);  
         $(this).find('ul').slideup(400); 
        }, function () {
          $(this).find('ul').slideDown(400);
          $(this).find('ul').slideUp(400);
       });
});


/*
$(document).ready(function () {
    $(".primary-menu li").hover(function () {
         $(this).siblings().find('ul').slideUp(400);
         $(this).find('ul').slideDown(400);  
         $(this).find('ul').slideup(400); 
    }, function () {
       $(this).find('ul').slideDown(400);
        $(this).find('ul').slideUp(400);
    },
     function () {
       $(this).find('ul').slideUp(400);
    });
});
*/