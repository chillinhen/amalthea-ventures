
<!-- footer -->
			<footer class="footer" role="contentinfo">
                            <nav class="nav" role="navigation" id="off-nav">
                        <?php html5blank_nav(); ?>
                    </nav>
                            <?php if(is_page_template('template-maintenance.php')) : ?>    
				<?php edit_post_link(); ?>
                                <?php endif;?>
			</footer>

			
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
