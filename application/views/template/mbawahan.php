

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/gallery/player.min.js"></script>
  <script src="assets/gallery/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  <script type="text/javascript" src="assets/js/owl.carousel.js"></script>
  
  <script>
    $(document).ready(function(){
      $("#owl-demo").owlCarousel({
 
      navigation: false,
      autoPlay : 3000,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      pagination : false,
      paginationNumbers: true,
        });
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');// text arera
    });
    </script>

  <script type="text/javascript">
 // Script written by @hamzadhamiya for @bloggerever.
// http://bloggerever.com

$(function () {
    $.FindContainer = function () {
        $('.tab-content>div').each(function findcontent() {
            var newindex = $('.activetab').index();
            var newheight = $('.activetab').height();
            $('.tab-content').animate({
                'height': newheight+20
            }, 100);
            var otherindex = $(this).index();
            var substractindex = otherindex - newindex;
            var currentwidth = $('.multipletab').width();
            var newpositions = substractindex * currentwidth;
            $(this).animate({
                'left': newpositions
            });
        });
    };
    $.FindId = function () {
        $('.tab-content>div').each(function () {
            if ($(this).attr('id') == $('.active').attr('id')) {
                $('.tab-content>div').removeClass('activetab');
                $(this).addClass('activetab');
            }
        });
    };
    $('.tab-buttons>span').first().addClass('active');
    $('.tab-content>div').each(function () {
        var activeid = $('.active').attr('id');
        if ($(this).attr('id') == activeid) {
            $(this).addClass('activetab');
        }
        var currentheight = $('.activetab').height();
        var currentwidth = $('.multipletab').width();
        var currentindex = $(this).index();
        var currentposition = currentindex * currentwidth;
        $(this).css({
            'left': currentposition,
                'width': currentwidth - 40,
                'padding': '10px 20px'
        });
        $(this).attr('data-position', currentposition);
        $('.tab-content').css('height', currentheight+20);
    });
    $('.tab-buttons>span').click(function () {

        $('.tab-buttons>span').removeClass('active');
        $(this).addClass('active');
        var currentid = $('.active').attr('id');
        $.FindId();
        $.FindContainer();
    });
    $('.next').click(function () {
        var activetabindex = $('.activetab').index() + 1;
        var containers = $('.tab-content>div').length;
        if (containers == activetabindex) {
            $('.tab-buttons>span').removeClass('active');
            $('.tab-buttons>span').first().addClass('active');
            var currentid = $('.active').attr('id');
            $.FindId();
            $.FindContainer();
        } else {
            var currentopen = $('.active').next();
            $('.active').removeClass('active');
            currentopen.addClass('active');
            $.FindId();
            $.FindContainer();
        }
    });
  $('.prev').click(function(){
    var activetabindex = $('.activetab').index();
        if (activetabindex == 0) {
            $('.tab-buttons>span').removeClass('active');
            $('.tab-buttons>span').last().addClass('active');
            var currentid = $('.active').attr('id');
            $.FindId();
            $.FindContainer();
        } else {
            var currentopen = $('.active').prev();
            $('.active').removeClass('active');
            currentopen.addClass('active');
            $.FindId();
            $.FindContainer();
        }
  });
});

  </script>

  </body>
</html>