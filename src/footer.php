			<!-- footer -->
<footer class="footer grid-wrapper-4" role="contentinfo">
<div class="top-footer-row">			
<nav class="footer-nav grid-item-2 changa grid-item content">
<?php wp_nav_menu( array( 'theme_location' => 'second-menu', 'container' => false, 'menu_id' => 'second-menu', 'menu_class' => '', 'fallback_cb' => false ) );?>

    
    </nav>
<nav class="footer-nav grid-item-1 changa grid-item content">
<?php wp_nav_menu( array( 'theme_location' => 'third-menu', 'container' => false, 'menu_id' => 'third-menu', 'menu_class' => '', 'fallback_cb' => false ) );?>
    


    
</nav>
                
<div class="grid-item-3 grid-item changa content"><h6 class="intro ">Questions?</h6>
                    <p>Info at hocosolarfarm dot com</p>
                
</div>
</div>
    
<div class="bottom-footer-row">

<div class="grid-item-1 changa content grid-item">
    
    <p class="subhead">About HoCo Solar Farm</p>
    <p>Hoco Solar Farm is a collaboration between Utility Advisor, Maxed Out Solar, and Repeater Digital. We created Hoco Solar to make it easier for Howard County residents to transition to clean energy. <strong>#GoSolarMD</strong></p>
    <p class="subhead">What other's are saying</p>
    <blockquote>An enthusiastic advocate for solar energy, Kevin Cheung has done great work for the Howard County Sierra Club... These community solar projects are great way to meet that commitment while bringing in tax revenue for Howard County.</blockquote> 
    <cite>— Carolyn Parsa, Sierra Club Howard County Chair</cite>
    <p>&copy; <?php echo date("Y"); ?> Copyright Howard County Solar Farm. Powered by <a href="www.wordpress.org" title="link to wordpress site">WordPress</a> &amp; <a href="http://www.html5blank.com/" title="link to html5 blank">HTML5 Blank.</a> Designed by <a href="https://www.repeater.digital" title="link to Repeater Digital Site">Repeater.Digital</a></p>


    
    
</div>
    
    
<div class="logo grid-item-2 grid-item content-tb grid-area-footer-logo content">
<div class="gf1 v-center h-center flex content">						
    
<a href="<?php echo esc_url( home_url() ); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img height="122" width="324" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-white-footer.svg" alt="Howard County Solar Farm" class="logo-img">
						</a>
            
    </div>
    
    
<div class="gf2 v-center h-center flex content">                      
<a title="link to my utulity advisor" href="https://www.myutilityadvisor.com/">
<img height="50" width="220" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Utility-Advisor-Horizontal-WHITE.png" alt="My Utility Advisor" class="logo-img">

</a>

    </div>
    
    
</div>
</div>			
    
    
    
    </footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M8KYCE6HVL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-M8KYCE6HVL');
</script>



	</body>
</html>
