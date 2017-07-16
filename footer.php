<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
		<div id="footer">
			<div>
				<img src="/wp-content/themes/ccjdev_at/assets/img/elements/logo-footer.png" width="111" height="58" alt="Around Town with Dallas & RaeJ" />
				<div>
					<h6>Featured Business:</h6>
					<a href="http://urbaneyefilms.com" title="Urban Eye Films" target="_blank">Urban Eye Films7</a>
				</div>
			</div>
			<?php 
				if ( has_nav_menu( 'primary' ) ) :
					wp_nav_menu( 
						array(
							'theme_location' 	=> 'primary', 
							'menu_id' 				=> '', 
							'menu_class'			=> '',
							'container_class' => ''
						) 
					);
				endif;
			?>
			<?php
				if ( has_nav_menu( 'footer' ) ) :
					wp_nav_menu( 
						array(
							'theme_location' 	=> 'footer', 
							'menu_id' 				=> '', 
							'menu_class'			=> '',
							'container_class' => ''
						) 
					);
				endif; 
			?>
			<div>
				<img src="/wp-content/themes/ccjdev_at/assets/img/elements/footer-dallas_raej.jpg" width="165" height="165" alt="Around Town is hosted by Dallas Jamison & RaeJ Johnson" />
				<p>
					EntMedia3 Productions Copyright 2016
				</p>
			</div>
		</div>
	</div>
	<div id="bkgrnd">
		<div id="bkgrnd-level_0"></div>
		<div id="bkgrnd-level_1"></div>
		<div id="bkgrnd-level_2"></div>
		<div id="bkgrnd-level_3"></div>
		<div id="bkgrnd-level_4"></div>
		<div id="bkgrnd-footer">
			<div></div>
			<div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</div>
		
<!--<?php wp_footer(); ?>-->
</body>
</html>
