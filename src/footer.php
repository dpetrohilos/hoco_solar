			<!-- footer -->
			<footer class="footer grid grid-wrapper-4" role="contentinfo">

				
                <nav class="footer-nav">
                </nav>
                <nav class="footer-nav">
                </nav>
                
                <nav class="footer-nav">
                </nav>
                
                <div><p class="big">Questions?</p>
                    <p>Info at hocosolarfarm dot com</p>
                
                </div>
                
                	<div class="logo">
						<a href="<?php echo esc_url( home_url() ); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img height="122" width="324" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/HC-White.svg" alt="Howard County Solar Farm" class="logo-img">
						</a>
					</div>
                
                <!-- copyright -->
			    <?php
				    printf( '<p class="copyright">' . __( '&copy; %1$s Copyright %2$s. Powered by <a href="%3$s" title="WordPress">WordPress</a> &amp; <a href="%4$s" title="HTML5 Blank">HTML5 Blank</a>.', 'html5blank' ) . 'Designed by <a href="repeater.digital" title="link to Repeater Digital Site">Repeater.Digital</p>',
				    	date( 'Y'),
				    	esc_html( get_bloginfo( 'name' ) ),
				    	'//wordpress.org',
				    	'//html5blank.com'
					);
				?>
				<!-- /copyright -->

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
