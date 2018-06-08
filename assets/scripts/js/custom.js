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

//End Document Ready
});