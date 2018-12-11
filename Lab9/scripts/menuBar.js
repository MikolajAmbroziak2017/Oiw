  src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">

    $(function() {
      $('.navigation-toggle').on('click', function(e) {
        $('body').toggleClass('navigation-show');
      });
    });
  