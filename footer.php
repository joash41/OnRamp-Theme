        <footer id="footer">
            <div class="container">
                <div class="fwidget one">
                    <?php dynamic_sidebar( 'footer-menu' ); ?>
                </div>
                <div class="fwidget two"><?php dynamic_sidebar( 'footer-newsletter-signup-form' ); ?></div>
            </div>
            <div class="copyright container">
                <?php echo date("Y"); echo " "; bloginfo('name'); ?>. 
                | By <a href="https://www.brandcandy.co.za/" target="_blank">Brand Candy</a>
            </div>
        </footer>
        <?php wp_footer(); ?>
		<script type="text/javascript">
			var stylesheet_directory_uri = "<?php echo get_template_directory_uri(); ?>";
		</script>
    </body>
</html>