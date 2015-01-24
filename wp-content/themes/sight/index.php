<?php get_header(); ?>



<div class="content-title">
	<a href="javascript: void(0);" id="mode"<?php if (isset($_COOKIE['mode']) && $_COOKIE['mode'] == 'grid') echo ' class="flip"'; ?>></a>
</div><br/>


<div>
	<div <?php post_class('post clear'); ?> id="post_<?php the_ID(); ?>">
			<?php if (has_post_thumbnail()): ?>
			<a href="<?php the_permalink() ?>" class="thumb left marginimg"><?php the_post_thumbnail('thumbnail', array(
					'alt' => trim(strip_tags($post->post_title)),
					'title' => trim(strip_tags($post->post_title)),
				)); ?></a>
			<?php endif; ?>

			<div class="post-category"><?php the_category(' / '); ?></div>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<div class="post-meta"><?php
				printf(__('by <span class="post-author"><a href="%s" title="Posts by %s">%s</a></span> on <span class="post-date">%s</span>', 'sight'),
					get_author_posts_url(get_the_author_meta('ID')),
					get_the_author(),
					get_the_author(),
					get_the_time('M j, Y')
				); ?>
				<em>&bull; </em><?php comments_popup_link(__('No Comments', 'sight'), __('1 Comment', 'sight'), __('% Comments', 'sight'), '', __('Comments Closed', 'sight')); ?>
				<?php edit_post_link(__('Edit entry', 'sight'), '<em>&bull; </em>'); ?>
			</div>
			<div class="post-content"><?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 55); ?></div>
		</div>
</div>




<?php
global $exl_posts;
$args = array('paged' => $paged);
if (!empty($exl_posts)) $args['post__not_in'] = $exl_posts;
query_posts($args);
?>

<?php get_template_part('loop'); ?>

<?php wp_reset_query(); ?>

<?php get_template_part('pagination'); ?>

<?php get_footer(); ?>
