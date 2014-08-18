<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="ITELnet - Comunicações & Serviços, S.A.">
        <meta name="keywords" content="POP, IPOP, ISP, INTERNET, WEB, CONNECTION">
        <meta name="description" content="IPOPISP is a revolutinary....">
        <title><?php echo $title_for_layout; ?> &dash;iPOPiSP - Worldclass ISP Service</title>
        <?php echo $this->Html->meta('favicon.ico',array('type' => 'icon'));?>
        <?php echo $this->Html->css(array( 'normalize.css','global.css', 'flexslider.css', 'carousel.css','skeleton.css', 'prettyPhoto.css')); ?>  
    </head>
    <body>
        <div id="geral container">
            <div class="headerr">
                <div class="logotipo">
                    <div class="header_inside ">
                        <div class="logo">
                            <?php echo $this->Html->link($this->Html->image('logotipo.png'), '/', array('escape' => false)); ?>
                        </div>
                        <div class="one columns flexslider">	
                            <ul class="slides service_list">
                                <li><?php echo $this->Html->image('headeee.png'); ?></li>
                                <li><?php echo $this->Html->image('headee.png'); ?></li>
                                <li><?php echo $this->Html->image('headeeee.png'); ?></li>
                                <li><?php echo $this->Html->image('heade.png'); ?></li>
                            </ul>	
                        </div> 
                    </div> 
                    <div class="header_soc_search">
                        <div class="header_search">
                            <?php echo $this->Html->link('Google+', 'http://www.google.com/', array('class' => 'header_soc_google','id' => 'soc_google', ' escape'=> false)); ?>
                            <?php echo $this->Html->link('Facebook', 'http://www.facebook.com/', array('class' => 'header_soc_fb','id' => 'soc_fb', ' escape'=> false)); ?>
                            <?php echo $this->Html->link('Twitter', 'http://www.twitter.com/', array('class' => 'header_soc_twitter','id' => 'soc_twitter', ' escape'=> false)); ?>
                            <?php echo $this->Html->link('Facebook', 'http://www.youtube.com/', array('class' => 'header_soc_youtube','id' => 'soc_youtube', ' escape'=> false)); ?>
                            <?php echo $this->Html->link('Twitter', 'http://www.skype.com/', array('class' => 'header_soc_skype','id' => 'soc_skype', ' escape'=> false)); ?><br>
                         </div>
                    </div>
                    <div class="header_soc_searcha">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <form name="form" method="post" action="">
                              <tr>
                                <td width="15">&nbsp;</td>
                                <td width="65"><div align="right"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Username:</font></div></td>
                                <td width="110"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><font color="#FFFFFF">
                                  <input type="text" name="username" size="14" align="center" value="">
                                </font></font></div></td>
                                <td width="16">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="3" colspan="4"></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="right"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Password:</font></div></td>
                                <td><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><font color="#FFFFFF">
                                  <input type="Password" name="passwd" size="14" align="middle" value="">
                                </font></font></div></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="3" colspan="4"></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><font color="#FFFFFF"></font></font></div></td>
                                <td><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><font color="#FFFFFF">
                                  <input type="button" name="okpressed" value="Login" class="Buttons" onClick="javascript:window.location.href='http://ipop.ipopisp.com/ipop2/index.php'">
                                </font></font></div></td>
                                <td>&nbsp;</td>
                              </tr>
                            </form>
                        </table><br>
                        <?php echo $this->Html->link(' &nbsp; Eng', '?lang=eng', array('class' => 'header_soc_eng','id' => 'soc_eng', ' escape'=> false)); ?>
                        <?php echo $this->Html->link('&nbsp; Por', '?lang=por', array('class' => 'header_soc_por','id' => 'soc_por', ' escape'=> false)); ?>
                         
                    </div>
                </div>
                <div class="dark_menu men sixteen columns">
                    <div class=" container">
                        <div id="menu" >
                            <ul>
                                <li>
                                        <?php echo $this->Html->link(__('HOME'), '/', array('escape'=> false)); ?>
                                </li>
                                <li>
                                        <?php echo $this->Html->link(__('WHO WE ARE'), '/whoweare', array('escape'=> false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('HOW IPOPISP WORKS'), '/ipopispworks', array('escape'=> false)); ?>	
                                    <div>
                                        <ul>
                                            <li>
                                                <?php echo $this->Html->link(__('IPOPMIL'), '/ipopmil', array('escape'=> false)); ?>
                                            </li>
                                            <li>
                                                <?php echo $this->Html->link(__('IPOPBUS'), '/ipopbus', array('escape'=> false)); ?>
                                            </li> 
                                            <li>
                                                <?php echo $this->Html->link(__('IPOPGOV'), '/ipopgov', array('escape'=> false)); ?>
                                            </li>
                                            <li>
                                                <?php echo $this->Html->link(__('IPOPEDU'), '/ipopedu', array('escape'=> false)); ?>
                                            </li> 
                                        </ul>
                                    </div>	
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('FEATURES'), '/features', array('escape'=> false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('LEAFLET'), '/leaflet', array('escape'=> false)); ?>	
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('SCREEN SHOTS'), '/screenshots', array('escape'=> false)); ?>
                                    <div>
                                        <ul>
                                            <li>
                                                <?php echo $this->Html->link(__('USER'), '/screenshots_user', array('escape'=> false)); ?>
                                            </li>
                                            <li>
                                                <?php echo $this->Html->link(__('ROOT'), '/screenshots_root', array('escape'=> false)); ?>
                                            </li>
                                            <li>
                                                <?php echo $this->Html->link(__('AGENT MANAGER'), '/screenshots_agentmanager', array('escape'=> false)); ?>
                                            </li>
                                            <li>
                                                <?php echo $this->Html->link(__('INVESTOR'), '/screenshots_investor', array('escape'=> false)); ?>
                                            </li> 
                                            <li>
                                                <?php echo $this->Html->link(__('SALES MAN'), '/screenshots_salesman', array('escape'=> false)); ?>
                                            </li> 
                                            <li>
                                                <?php echo $this->Html->link(__('STATISTICS'), '/screenshots_statistics', array('escape'=> false)); ?>
                                            </li>
                                        </ul>
                                    </div>	
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('CONTACT'), '/contact', array('escape'=> false)); ?>
                                </li>
                            </ul>
                        </div>
                        <select id="select_menu" onchange="location = this.value">
                            <option value=""><?php echo __('select menu'); ?></option>
                            <option value="home"><?php echo __('Home'); ?></option>
                            <option value="whoweare"><?php echo __('Who We Are'); ?></option>
                            <option value="ipopispworks"><?php echo __('How iPOPiSP Works'); ?></option>
                                <option value="ipopmil"><?php echo __('IPOPMIL'); ?></option>
                                <option value="ipopbus"><?php echo __('IPOPBUS'); ?></option>
                                <option value="ipopgov"><?php echo __('IPOPGOV'); ?></option>
                                <option value="ipopedu"><?php echo __('IPOPEDU'); ?></option>
                            <option value="features"><?php echo __('Features'); ?></option>
                            <option value="leaflet"><?php echo __('Leaflet'); ?></option>
                            <option value="screenshots"><?php echo __('Screen Shots'); ?></option>
                                <option value="screenshots_user"><?php echo __('User'); ?></option>
                                <option value="screenshots_root"><?php echo __('Root'); ?></option>
                                <option value="screenshots_agentmanager"><?php echo __('Agent Manager'); ?></option>
                                <option value="screenshots_investor"><?php echo __('Investor'); ?></option>
                                <option value="screenshots_salesman"><?php echo __('Sales Man'); ?></option>
                                <option value="screenshots_statistics"><?php echo __('Statistics'); ?></option>
                            <option value="pricing"><?php echo __('Pricing/Quotation'); ?></option>
                            <option value="marksofesteem"><?php echo __('Marks Of Esteem'); ?></option>
                            <option value="faqs"><?php echo __('Faqs'); ?></option>
                            <option value="contact"><?php echo __('Contact'); ?></option>
                            <option value="?lang=por"><?php echo __('Por'); ?></option>
                            <option value="?lang=eng"><?php echo __('Eng'); ?></option>
                        </select>
                    </div>
                </div> 
            </div> 
            <div class="destaq">
                <h4><?php echo $this->Html->link('&nbsp; &nbsp; Pricing/Quotation', '/pricing', array('escape'=> false)); ?></h4>
                <h4><?php echo $this->Html->link('&nbsp; &nbsp; Marks Of Esteem', '/marksofesteem', array('escape'=> false)); ?></h4>
                <h4>&nbsp;&nbsp;<?php echo $this->Html->link('&nbsp; &nbsp; Faqs', '/faqs', array('escape'=> false)); ?></h4>
                <h4><?php echo $this->Html->link('&nbsp; &nbsp; Contact', '/contact', array('escape'=> false)); ?></h4>
                <h5><br>
                    <?php echo $this->Html->link('&nbsp; &nbsp; * IPOPMIL', '/ipopmil', array('escape'=> false)); ?></br>
                    <?php echo $this->Html->link('&nbsp; &nbsp; * IPOPBUS', '/ipopbus', array('escape'=> false)); ?></br>
                    <?php echo $this->Html->link('&nbsp; &nbsp; * IPOPGOV', '/ipopgov', array('escape'=> false)); ?> </br>
                    <?php echo $this->Html->link('&nbsp; &nbsp; * IPOPEDU', '/ipopedu', array('escape'=> false)); ?></br>
                </h5>
            </div>
            <div class="clear"></div>
            <!-- Main Navigation::END -->
            <?php echo $this->fetch('content'); ?>
                       
            <footer><!-- Rodapé -->
                <div id="footer" >
                    <div class=" containe">
                        <div class="row footer_inside ">
                            <div class="six columns">
                                <h3><?php echo $this->Html->link(__('Services'), '/ipopispworks', array('escape'=> false)); ?></h3>
                                <p>&nbsp; <?php echo $this->Html->link(__('IPOPMIL'), '/ipopmil', array('escape'=> false)); ?><br>
                                    &nbsp; <?php echo $this->Html->link(__('IPOPBUS'), '/ipopbus', array('escape'=> false)); ?><br>
                                    &nbsp; <?php echo $this->Html->link(__('IPOPGOV'), '/ipopgov', array('escape'=> false)); ?><br>
                                    &nbsp; <?php echo $this->Html->link(__('IPOPEDU'), '/ipopedu', array('escape'=> false)); ?><br>
                                </p>
                            </div> 
                            <div class="four columns">
                                <h3><?php echo $this->Html->link(__('Contact Us'), '/contact', array('escape'=> false)); ?></h3>
                                <div class='icon_phone' title='Phone'>
                                    <p><span>Luanda </span>(+244) 9222000688</p>
                                    <p><span>Fax </span>(+1815)3641713 </p>
                                </div>
                                <div class='icon_mail' title='Email'>ipopisp@gmail.com</div>	
                                <div class='icon_loc' title="<?php echo __('Location'); ?>">iPOPiSP - Av. Che-Guevara, 138 Luanda-Angola</div>
                            </div> 
                        </div> 
                    </div>
                    <div class="footer_btm">
                        <div class="footer_bt containe">
                            <h9>&nbsp; IPOPISP © 2014 All Rights Reserved *  <?php echo $this->Html->link(__('ITELnet - Comunicações & Serviços, S.A. '), 'http://www.itelnet.co.ao/', array('escape'=> false)); ?></h9>
                        </div>
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

