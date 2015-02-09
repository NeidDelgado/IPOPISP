<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <title><?php echo $title_for_layout; ?> &dash;</title>
        <?php echo $this->Html->meta('favicon.ico',array('type' => 'icon'));?>
<<<<<<< HEAD
        <?php echo $this->Html->css(array( 'prettyPhoto.css')); ?>
    </head>
    <body>
        <div id="l">
            <div class="he">
                <div class="l">
  
                        </div>
                    </div>
=======
        <?php echo $this->Html->css(array( 'prettyPhoto.css')); ?>  
    </head>
    <body>
        <div id="geral container">
          
>>>>>>> origin/master
                    </div>
                </div>
            </footer><!-- fim rodapé -->
        </div>
    </body>
    <?php echo $this->Html->script('jquery-2.1.1.min'); ?>
    <?php echo $this->Html->script(array('jquery-1.7.2.min.js', 'jquery.easing.1.3.js', 'common.js')); ?>
    <?php echo $this->Html->script(array('sequence.jquery-min.js', 'jquery.qui.jcksand.js')); ?>  
    <?php echo $this->Html->script(array('jquery.flexslider-min.js', 'jquery.prettyPhoto.js', 'jquery.jcarousel.min.js', 'jquery.tipsy.js')); ?>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#portfolio_carousel').jcarousel({
                scroll: ($(window).width() > 767 ? 4 : 1),
                easing: 'easeInOutExpo',
                animation: 600
            }); });
        // Reload carousels on window resize to scroll only 1 item if viewport is small
    $(window).resize(function() {
         var el = $("#portfolio_carousel"), carousel = el.data('jcarousel'), win_width = $(window).width();
           var visibleItems = (win_width > 767 ? 4 : 1);
           carousel.options.visible = visibleItems;
           carousel.options.scroll = visibleItems;
           carousel.reload();
    });
    </script> 
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#testimonials_carousel').jcarousel({
                auto: 4,
                scroll: 1,
                wrap: 'last',
                easing: 'easeInOutExpo',
                animation: 600
            });  });	
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#clients_carousel').jcarousel({
                scroll: 1,
                easing: 'easeInOutExpo',
                animation: 600
            }); });	
    </script>
    <script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            controlNav: false,
            start: function(slider){
              $('body').removeClass('loading');
            } }); });
    </script>
    <script type="text/javascript">	
        var preloader = ($.browser.msie) ? false : true ;
        $(document).ready(function(){
            var options = {
                autoPlay: true,
                autoPlayDelay: 5000,
                nextButton: true,
                prevButton: true,
                preloader: preloader,
                animateStartingFrameIn: true,
                transitionThreshold: 500,
                fallback: {
                theme: "slide",
                speed: 500
            } };
            var sequence = $("#sequence").sequence(options).data("sequence");
            sequence.afterLoaded = function(){
                $(".info").css('display','block');
                $("#sequence").hover(
                    function() {
                            $(".prev, .next").stop().animate({opacity:0.7},300);	            
                    },
                    function() {        
                            $(".prev, .next").stop().animate({opacity:0},300);
                    });
                $(".prev, .next").hover(
                    function() {
                            $(this).stop().animate({opacity:1},200);	            
                    },
                    function() {        
                            $(this).stop().animate({opacity:0.7},200);
                    }   ); } })
    </script>
</html>

<<<<<<< HEAD
 
=======
>>>>>>> origin/master
