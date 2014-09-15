<?php

/**
 * Widget che permette la visualizzazione di candidati
 * Widget che permette la visualizzazione di candidati
 *
 */
class SB_Candidati extends WP_Widget {

	function __construct() {
		parent::__construct('sb-candidati', __('SB Candidati', 'engine'));
		
	}

	function widget($args, $instance) {
		$cache = wp_cache_get('widget_sb_candidati', 'widget');

		if ( !is_array($cache) )
			$cache = array();

		if ( ! isset( $args['widget_id'] ) )
			$args['widget_id'] = $this->id;

		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo $cache[ $args['widget_id'] ];
			return;
		}

		ob_start();
		extract($args);

		$title = apply_filters('widget_title', empty($instance['title']) ? __('', 'engine') : $instance['title'], $instance, $this->id_base);
		$sb_election = empty( $instance['session']) ? '' : $instance['session'];
 		
		?>
			<li class="widget sb-candidati">
				<h4 class="widget-title">
					<?php echo stripslashes($title); ?>
				</h4>
				<div>
						<?php
							$query_args = array(
								'post_type' => 'candidati',
								'meta_query' => array(
									array(
										'key' => 'sb_elezioni',
										'value' =>	$sb_election,
										'compare' => 'LIKE'
										),
									),
							);

							$query = new WP_Query($query_args);

							while($query->have_posts()) : $query->the_post();
						?>
						<article class="the-post row">
			
							<div class="featured-image">
								<img src="<?php echo get_field('sb_foto_candidato'); ?>"/></a>
							</div>
							<!-- /.featured-image -->
							
							<div class="details">
								<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<div class="entry-content">
									<?php echo get_field('sb_biografia_candidato'); ?>
								</div>
							</div>
							<!-- /.details -->
					
						</article>
						<?php endwhile; ?>
				</div>
			</li>
		<?php

		$cache[$args['widget_id']] = ob_get_flush();
		wp_cache_set('widget_sb_candidati', $cache, 'widget');
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['qty'] = (int) $new_instance['qty'];
		$instance['excerpt_length'] = (int) $new_instance['excerpt_length'];
		$instance['session'] = strip_tags( $new_instance['session'] );
		$this->flush_widget_cache();

		$alloptions = wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['widget_sb_candidati']) )
			delete_option('widget_sb_candidati');

		return $instance;
	}

	function flush_widget_cache() {
		wp_cache_delete('widget_sb_candidati', 'widget');
	}
	
	function form( $instance ) {
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$qty = isset($instance['qty']) ? absint($instance['qty']) : 5;
		$sb_election = isset($instance['session']) ? esc_attr($instance['session']) : '';
		$autoplay = isset($instance['autoplay']) ? esc_attr($instance['autoplay']) : 0;
		$random = isset($instance['random']) ? esc_attr($instance['random']) : '';
		$excerpt_length = isset($instance['excerpt_length']) ? absint($instance['excerpt_length']) : 0;
		?>
			<!-- title -->
			<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'engine'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
			
			<!-- qty -->
			<p><label for="<?php echo $this->get_field_id('qty'); ?>"><?php _e('Number of posts:', 'engine'); ?></label>
			<input id="<?php echo $this->get_field_id('qty'); ?>" name="<?php echo $this->get_field_name('qty'); ?>" type="text" value="<?php echo $qty; ?>" size="3" /></p>
			
			<!-- Elections -->
			<?php
				$args = array(
					'selected' => $sb_election,
					'name' => $this->get_field_name('session'),
					'id' => $this->get_field_id('session'),
					'class' => 'widefat',
					'taxonomy' => 'elections'
				);

				wp_dropdown_categories($args);
			?>

			<p><label for="<?php echo $this->get_field_id('excerpt_length'); ?>"><?php _e('Excerpt Length:', 'engine'); ?></label>
			<input id="<?php echo $this->get_field_id('excerpt_length'); ?>" name="<?php echo $this->get_field_name('excerpt_length'); ?>" type="text" value="<?php echo $excerpt_length; ?>" size="3" /></p>
		

			<?php
	}
}

function SB_Candidati_init() {
    register_widget('SB_Candidati');
}

add_action('widgets_init', 'SB_Candidati_init');

?>