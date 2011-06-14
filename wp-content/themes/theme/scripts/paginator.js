var position = 0;
var offset = 708;
var width = 0;
var pages = 0;
var current_page = 1;
var content;

function nextPage() {
  position = parseInt($(".paginate").css("left")) - offset;
  content.css("left",position+'px'); 
  content.effect("highlight", {color: "#efefef"}, 1000);
  current_page += 1;
  toggleNextButton();
  togglePreviousButton();
}

function previousPage() {
  position = parseInt($(".paginate").css("left")) + offset;
  content.css("left",position+'px'); 
  content.effect("highlight", {color: "#efefef"}, 1000);
  current_page -= 1;
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
  width = last_element.offset().left + 334;
  pages = parseInt(width / offset);
  content = $(".paginate:first");

  $('#next_button').click(function(e) {
    nextPage();
    e.preventDefault();
  });

  $('#previous_button').click(function(e) {
    previousPage();
    e.preventDefault();
  });
});
