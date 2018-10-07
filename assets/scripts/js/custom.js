//Custom JS for Howard Center
// by Andrew@thinkupdesign.ca
//


jQuery(document).ready(function($) {

  DS = $('#mega-menu-item-11 > a');
  MH = $('#mega-menu-item-12 > a');
  SU = $('#mega-menu-item-13 > a');

  menuSpice(DS);
  menuSpice(MH);
  menuSpice(SU);

  //$(', #mega-menu-item-12 > a, #mega-menu-item-13 > a ').html(newText);

  // Adds markup to mega menu items for additional styling
  function menuSpice(selector) {
    var oldString = 'Services',
    newString = '<span>Services</span>',
    newText = selector.text().replace(RegExp(oldString,"gi"),newString);
    selector.html(newText);
  }

  // Initialize Slick Slider on Homepage Bulletin items
  $('.bulletinSlider').slick({
  arrows: true,
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


//End Document Ready
});