<?php get_header();  wp_reset_query(); ?>

	<div class="row">

		<div class="content small-12 column <?php echo engine_content_position(); ?>">

			<article <?php post_class(); ?>>

				<div class="candidate-profile">
					<div class="candidate-photo">
						<img src="<?php the_field('sb_foto_candidato'); ?>"/>
					</div>
					<div class="candidate-social">
						<ul>
							<?php $facebook_prof_url = get_field('sb_profilo_facebook_candidato'); ?>

							<?php if ( !is_null($facebook_prof_url )) : ?>
								<li><a href="<?php the_field('sb_profilo_facebook_candidato'); ?>" target="_blank"><img src="../../wp-content/themes/reporter-child/assets/img/facebook.png"></a></li>
							<?php endif; ?>

							<?php $twitter_prof_url = get_field('sb_profilo_twitter_candidato'); ?>

							<?php if ( !is_null($twitter_prof_url )) : ?>
								<li><a href="<?php the_field('sb_profilo_twitter_candidato'); ?>" target="_blank"><img src="../../wp-content/themes/reporter-child/assets/img/twitter.png"></a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>

				
				<!-- /.featured-image -->

				

				<!-- .entry-header -->
				<header class="entry-header main-header">

					<h4><?php the_title(); ?></h4>

				</header>
				<!-- /.entry-header -->

				<div class="entry-content">
					<?php the_field('sb_curriculum_candidato'); ?>
					<?php engine_link_pages('before=<div class="page-links pagination">&after=</div>'); ?>
				</div>

			</article>
			<!-- /.post -->

			<?php get_template_part('parts/related'); ?>

			<?php //comments_template('', true); ?>

		</div>
		<!-- /.content small-12 large-9 column -->

		<?php if( engine_content_position() != 'large-12' ) : ?>
		<div class="sidebar small-12 large-3 column" id="sidebar">
			<?php get_sidebar(); ?>
		</div>
		<!-- /#sidebar.sidebar small-12 large-3 column -->
		<?php endif; ?>

	</div>
	<!-- /.row -->

<?php get_footer(); ?>