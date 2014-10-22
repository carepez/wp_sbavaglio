<?php get_header(); wp_reset_query(); ?>

	<div class="row">

		<div class="content small-12 column <?php echo engine_content_position(); ?>">

			<div <?php post_class(); ?>>

				<div class="entry-content">
					<h1 class="page-title"><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<?php engine_link_pages('before=<div class="page-links pagination">&after=</div>'); ?>
				</div>

			</div>
			<!-- /.post -->

			<?php get_template_part('parts/related'); ?>

			<?php 
				$query_args = array(
								'post_type' => 'candidati',);

				$query = new WP_Query($query_args);

				while($query->have_posts()) : $query->the_post();
			?>

				<div class="large-6 columns">
					<div class="panel">
						<div class="thumbtittle group">
							<div class="candidate-thumbnail">
								<img src="<?php echo get_field('sb_foto_candidato'); ?>"/>
							</div>
							<p class="candidate-details">
								<h5><a href="<?php echo get_permalink(); ?>"><?php the_field('sb_nome_candidato'); ?></a></h5>
								<p><?php the_field('sb_biografia_candidato'); ?></p>
							</p>
							<div class="candidate-social">
								<ul>

									<?php $facebook_prof_url = get_field('sb_profilo_facebook_candidato'); ?>

									<?php if ( !is_null($facebook_prof_url )) : ?>
											<li><a href="<?php the_field('sb_profilo_facebook_candidato'); ?>" target="_blank"><img src="../wp-content/themes/reporter-child/assets/img/facebook.png"></a></li>
									<?php endif; ?>

									<?php $twitter_prof_url = get_field('sb_profilo_twitter_candidato'); ?>

									<?php if ( !is_null($twitter_prof_url )) : ?>
											<li><a href="<?php the_field('sb_profilo_twitter_candidato'); ?>" target="_blank"><img src="../wp-content/themes/reporter-child/assets/img/twitter.png"></a></li>
									<?php endif; ?>
								</ul>
							</div>
							
						</div><!-- thumbtitle -->

					</div> <!-- panel -->
				</div> <!-- large6 -->			
			<?php endwhile; ?>
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