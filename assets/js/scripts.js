// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.
var item1 = {
  top: "10px",
  left: "10px",
  width: "440px",
  height: "550px"
};
var item2 = {
  top: "10px",
  left: "480px",
  width: "440px",
  height: "550px"
};
var item3 = {
  top: "530px",
  left: "55px",
  width: "200px",
  height: "250px"
};
var item4 = {
  top: "530px",
  left: "365px",
  width: "200px",
  height: "250px"
};
var item5 = {
  top: "530px",
  left: "675px",
  width: "200px",
  height: "250px"
};

$('.circle-controls .next').on('click', function() {

  $('.item-1').animate(item2, 500);
  $('.item-2').animate(item5, 500);
  $('.item-3').animate(item1, 500);
  $('.item-4').animate(item3, 500);
  $('.item-5').animate(item4, 500);

  $('.item-1').addClass('item-temp-2');
  $('.item-1').removeClass('item-1');
  $('.item-2').addClass('item-temp-5');
  $('.item-2').removeClass('item-2');
  $('.item-3').addClass('item-temp-1');
  $('.item-3').removeClass('item-3');
  $('.item-4').addClass('item-temp-3');
  $('.item-4').removeClass('item-4');
  $('.item-5').addClass('item-temp-4');
  $('.item-5').removeClass('item-5');
  $('.item-temp-1').addClass('item-1');
  $('.item-temp-1').removeClass('item-temp-1');
  $('.item-temp-2').addClass('item-2');
  $('.item-temp-2').removeClass('item-temp-2');
  $('.item-temp-3').addClass('item-3');
  $('.item-temp-3').removeClass('item-temp-3');
  $('.item-temp-4').addClass('item-4');
  $('.item-temp-4').removeClass('item-temp-4');
  $('.item-temp-5').addClass('item-5');
  $('.item-temp-5').removeClass('item-temp-5');

})

$('.circle-controls .prev').on('click', function() {

  $('.item-1').animate(item3, 500);
  $('.item-2').animate(item1, 500);
  $('.item-3').animate(item4, 500);
  $('.item-4').animate(item5, 500);
  $('.item-5').animate(item2, 500);

  $('.item-1').addClass('item-temp-3');
  $('.item-1').removeClass('item-1');
  $('.item-2').addClass('item-temp-1');
  $('.item-2').removeClass('item-2');
  $('.item-3').addClass('item-temp-4');
  $('.item-3').removeClass('item-3');
  $('.item-4').addClass('item-temp-5');
  $('.item-4').removeClass('item-4');
  $('.item-5').addClass('item-temp-2');
  $('.item-5').removeClass('item-5');
  $('.item-temp-1').addClass('item-1');
  $('.item-temp-1').removeClass('item-temp-1');
  $('.item-temp-2').addClass('item-2');
  $('.item-temp-2').removeClass('item-temp-2');
  $('.item-temp-3').addClass('item-3');
  $('.item-temp-3').removeClass('item-temp-3');
  $('.item-temp-4').addClass('item-4');
  $('.item-temp-4').removeClass('item-temp-4');
  $('.item-temp-5').addClass('item-5');
  $('.item-temp-5').removeClass('item-temp-5');

})
$(document).ready(function() {
  if (localStorage.getItem('popState') != 'shown') {
    $(".modal-welcome").delay(2000).fadeIn();
    localStorage.setItem('popState', 'shown')
  }

  $('.modal .fa-times-circle').click(function(e) {
    $('.modal').fadeOut();
  });

  $('.table-price button').on('click', function() {
    $(this).parent('td').parent('tr').addClass('current-row');
    var selector;
    $('.table-price tr').each(function(index, el) {
      var currentTitle = $(this).children('td').children('h5').html();
      if ($(this).hasClass('current-row')) {
        selector = selector + '<option selected value="' + currentTitle + '">' + currentTitle + '</option>';
      } else {
        selector = selector + '<option value="' + currentTitle + '">' + currentTitle + '</option>';
      }

    });
    $('.order-select').html(selector);
    $('.current-row').removeClass('current-row');
    $('.modal-order').fadeIn('fast');
  })

});
var maxheight = 0;
$(".price-second").each(function() {
  if($(this).height() > maxheight) { maxheight = $(this).height(); }
});

$(".price-second").height(maxheight);
