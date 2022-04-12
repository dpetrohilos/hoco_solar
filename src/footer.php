			<!-- footer -->
<footer class="footer grid-wrapper-4" role="contentinfo">
<div class="top-footer-row">			
<nav class="footer-nav grid-item-2 changa grid-item content">
<?php wp_nav_menu( array( 'theme_location' => 'second-menu', 'container' => false, 'menu_id' => 'second-menu', 'menu_class' => '', 'fallback_cb' => false ) );?>

    
    </nav>
<nav class="footer-nav grid-item-1 changa grid-item content">
<?php wp_nav_menu( array( 'theme_location' => 'third-menu', 'container' => false, 'menu_id' => 'third-menu', 'menu_class' => '', 'fallback_cb' => false ) );?>
    


    
</nav>
                
<div class="grid-item-3 grid-item changa content-tb"><h6 class="intro ">Questions?</h6>
                    <p>Info at hocosolarfarm dot com</p>
                
</div>
</div>
    
<div class="bottom-footer-row">               
<div class="logo grid-item-1 grid-item content-tb grid-area-footer-logo">
<div class="gf1 v-center h-center flex content">						
    
<a href="<?php echo esc_url( home_url() ); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img height="122" width="324" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-white-footer.svg" alt="Howard County Solar Farm" class="logo-img">
						</a>
            
    </div><div class="gf2 v-center h-center flex content">                      
<a title="link to my utulity advisor" href="http://www.myutilityadvisor.com/">
<img height="50" width="220" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Utility-Advisor-Horizontal-WHITE.png" alt="My Utility Advisor" class="logo-img">

</a>

    </div></div>
<div class="grid-item-2 changa content grid-item">
                <!-- copyright -->
			    <?php
				    printf( '<p class="copyright changa ">' . __( '&copy; %1$s Copyright %2$s. Powered by <a href="%3$s" title="WordPress">WordPress</a> &amp; <a href="%4$s" title="HTML5 Blank">HTML5 Blank</a>.', 'html5blank' ) . ' Designed by <a href="repeater.digital" title="link to Repeater Digital Site">Repeater.Digital</p>',
				    	date( 'Y'),
				    	esc_html( get_bloginfo( 'name' ) ),
				    	'//wordpress.org',
				    	'//html5blank.com'
					);
				?>
				<!-- /copyright -->
                </div>
</div>			
    
    
    
    </footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
