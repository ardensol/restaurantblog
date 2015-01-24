			</div>
			<!-- /Content -->

			<?php get_sidebar(); ?>

			</div>
			<!-- /Container -->

			<div class="footer">
				<p class="copyright">&copy; 2010 <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>.
					<?php _e('All Rights Reserved.', 'sight'); ?><br />
					
				</p>
				
			</div>
		</div>
		<!-- Page generated: <?php timer_stop(1); ?> s, <?php echo get_num_queries(); ?> queries -->
		<?php wp_footer(); ?>

		<?php echo (get_option('ga')) ? get_option('ga') : '' ?>
	</body>
</html>
