var position = 0;
var offset = 705;
var width = 0;
var pages = 0;
var current_page = 1;


function nextPage() {
  position = parseInt($(".paginate").css("left")) - offset;
  $(".paginate:first").css("left",position+'px'); 
  $(".paginate:first").effect("highlight", {color: "#efefef"}, 1000);
  current_page += 1;
  console.log("current page: " + current_page);
  toggleNextButton();
  togglePreviousButton();
}

function previousPage() {
  position = parseInt($(".paginate").css("left")) + offset;
  $(".paginate:first").css("left",position+'px'); 
  $(".paginate:first").effect("highlight", {color: "#efefef"}, 1000);
  current_page -= 1;
  console.log("current page: " + current_page);
  toggleNextButton();
  togglePreviousButton();
}

function toggleNextButton() {
  if (current_page == pages) {
    $('#next_button').hide();
  } else {
    $('#next_button').show();
  }
}

function togglePreviousButton() {
  if (current_page == 1) {
    $('#previous_button').hide();
  } else {
    $('#previous_button').show();
  }
}

$(document).ready(function() {
  var last_element = $('.paginate > p:last');
  width = last_element.offset().left + last_element.width();
  $(".paginate").css("width", width);
  pages = parseInt(width / offset);
  console.log("pages: " + pages);

  $('#next_button').click(function(e) {
    nextPage();
    e.preventDefault();
  });
  $('#previous_button').click(function(e) {
    previousPage();
    e.preventDefault();
  });
});
