<script type="text/javascript" src="//code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="scripts/slick.min.js"></script>
<script src="https://kit.fontawesome.com/78e29689f6.js" crossorigin="anonymous"></script>
<script>
$('.latest-courses-slider').slick({
  prevArrow: $(".prev"),
  nextArrow: $(".next"),
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
</script>
<script src="https://kit.fontawesome.com/38b1f6738f.js" crossorigin="anonymous"></script>
<script>
var mybutton = document.getElementById("backTop");
window.onscroll = function() {
  scrollFunction()
  };
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  $("html, body").animate({ scrollTop: "0" }); 
}
</script>
<script>
$( "#show-course-info" ).click(function() {
  $("#course-text").slideToggle();
});
</script>
<script>
$(document).ready(function() {
var movementStrength = 25;
var height = movementStrength / $(window).height();
var width = movementStrength / $(window).width();
$(".header-home").mousemove(function(e){
  var pageX = e.pageX - ($(window).width() / 2);
  var pageY = e.pageY - ($(window).height() / 2);
  var newvalueX = width * pageX * -1 - 25;
  var newvalueY = height * pageY * -1 - 50;
  $('.header-home').css("background-position", newvalueX+"px     "+newvalueY+"px");
});
});
</script>