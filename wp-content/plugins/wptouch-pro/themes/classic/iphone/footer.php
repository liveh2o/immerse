				</div><!-- #content -->
					
				<?php do_action( 'wptouch_body_bottom' ); ?>
						
				<?php if ( wptouch_show_switch_link() ) { ?>
					<div id="switch">
						<?php _e( "Mobile Theme", "wptouch-pro" ); ?> | <a href="<?php wptouch_the_mobile_switch_link(); ?>"><?php _e( "Switch To Regular Theme", "wptouch-pro" ); ?></a>
					</div>
				<?php } ?>
						
				<div class="<?php wptouch_footer_classes(); ?>">
					<?php wptouch_footer(); ?>
				</div>
	
				<?php do_action( 'wptouch_advertising_bottom' ); ?>
			</div> <!-- #inner-ajax -->
		</div> <!-- #outer-ajax -->
		<?php // include_once('web-app-bubble.php'); ?>
		<!-- <?php echo 'WPtouch Pro v.' . WPTOUCH_VERSION; ?> -->
	</body>
</html>