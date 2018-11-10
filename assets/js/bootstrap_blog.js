(function() {
  $(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();

    $(window).on('scroll resize', function () {
        if ($(this).scrollTop() > 60) {
            $('#back-to-top').show(500);
        } else {
            $('#back-to-top').hide(500);
        }
    });
    $('#back-to-top').click(function () {
        $('#back-to-top').tooltip('hide');
        $('html, body').animate({ scrollTop:0 }, 800);
        return false;
      });
  });
})(jQuery)