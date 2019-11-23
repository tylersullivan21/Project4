  /*  $(document).ready(function(){
      $('.slider-for').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         arrows: false,
         fade: true,
         asNavFor: '.slider-nav'
       });
       $('.slider-nav').slick({
         slidesToShow: 3,
         slidesToScroll: 1,
         asNavFor: '.slider-for',
         dots: true,
         centerMode: true,
         focusOnSelect: true
       });
 
    });
*/
 
//var explore = document.getElementById("explore");

function showExploreSubnav(){
    var subnav = document.getElementsByClassName("subnav")[0];
    subnav.classList.add("show");
    //subnav.setAttribute("style","display:block");
 }
 
 //explore.onmouseover = showExploreSubnav;
 
 
 /*function hideExploreSubnav(){
 var subnav = document.getElementsByClassName("subnav")[0];
 subnav.classList.remove("show");
 }
 explore.onmouseout = hideExploreSubnav;
 */
 
 