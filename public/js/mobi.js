// mobi.js
if (screen.width < 600) {
  $('a[href^="#hl"]').on('click', function(e){
    e.preventDefault();
    $('#navbarSupportedContent').toggle();
  });

  //
  $('.navbar-toggler').on('click', function(e){
    e.preventDefault();
    $('#navbarSupportedContent').toggle();
  })
}
