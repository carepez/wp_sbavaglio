<?php

class Engine_Rubrica_Block extends AQ_Block {
	
	//set and create block
	function __construct() {
		$block_options = array(
			'name' => __('Rubrica','engine'),
			'size' => 'span12',
		);
		
		//create the block
		parent::__construct('engine_rubrica_block', $block_options);
	}
	
	function form($instance) {
		
		$defaults = array(
			'author' => '',
			'qty' => '',
			'category' => array(),
			'autoplay' => '5000',
			'orderby' => 'date',
			'asc' => 'DESC',
			'style' => 'title',
			'excerpt_length' => '17',
		);
				
		$instance = wp_parse_args($instance, $defaults);
		extract($instance);
		
		$button_class = array( 'button', 'button-hero', 'simple-image-widget-control-choose' );

		$terms = get_terms('category');
		
		$all_terms = array();
		
		foreach( $terms as $term ) {
			$all_terms[ $term->term_id] = $term->name;
		}
		
		$orderby_options = array(
			'date' => __('Date','engine'),
			'title' => __('Title','engine'),
			'rand' => __('Random','engine'),
			'comment_count' => __('Comments','engine'),
		);
		
		$order_options = array(
			'DESC' => 'DESC',
			'ASC' => 'ASC',
		);
		
		$style_options = array(
			'title' => __('Title Only','engine'),
			'title_meta' => __('Title & Meta','engine'),
			'title_meta_thumb_side' => __('Title, Meta & Thumb (thumb on side)','engine'),
			'title_meta_thumb_1' => __('Title, Meta & Thumb (1 column)','engine'),
			'title_meta_thumb_2' => __('Title, Meta & Thumb (2 columns)','engine'),
			'title_meta_thumb_3' => __('Title, Meta & Thumb (3 columns)','engine'),
			'title_meta_thumb_4' => __('Title, Meta & Thumb (4 columns)','engine'),
			//andres mauricio
			'title_meta_excerpt' => __('Title, Meta & Excerpt','engine'),
		);
		
		?>
		<p class="description">
			<label for="<?php echo $this->get_field_id('title') ?>">
				<?php _e('Title (optional)','engine'); ?>
				<?php echo aq_field_input('title', $block_id, $title, $size = 'full') ?>
			</label>
		</p>

		<p class="description">
			<label for="<?php echo $this->get_field_id('author') ?>">
				<?php _e('Author','engine'); ?>
				<?php echo aq_field_input('author', $block_id, $author, $size = 'full') ?>
			</label>
		</p>
		
		<?php if ( ! is_simple_image_widget_legacy() ) : ?>
				<p class="simple-image-widget-control<?php echo ( $image_id ) ? ' has-image' : ''; ?>"
					data-title="<?php esc_attr_e( 'Choose an Image', 'simple-image-widget' ); ?>"
					data-update-text="<?php esc_attr_e( 'Update Image', 'simple-image-widget' ); ?>"
					data-target=".image-id">
					<?php
					if ( $image_id ) {
						echo wp_get_attachment_image( $image_id, 'thumbnail', false );
						//echo wp_get_attachment_image( $image_id,  array(200,200), false );
						unset( $button_class[ array_search( 'button-hero', $button_class ) ] );
					}
					?>
					<input type="hidden" name="<?php echo esc_attr( $this->get_field_name( 'image_id' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'image_id' ) ); ?>" value="<?php echo absint( $image_id ); ?>" class="image-id simple-image-widget-control-target">
					<a href="#" class="<?php echo esc_attr( join( ' ', $button_class ) ); ?>"><?php _e( 'Choose an Image', 'simple-image-widget' ); ?></a>
				</p>
		<?php endif; ?>

		<p class="description">
			<label for="<?php echo $this->get_field_id('style') ?>">
				<?php _e('Style','engine'); ?>
				<?php echo aq_field_select('style', $block_id, $style_options, $style) ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('qty') ?>">
				<?php _e('Number of Posts','engine'); ?>
				<?php echo aq_field_input('qty', $block_id, $qty, $size = 'full') ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('category') ?>">
				<?php _e('Categories','engine'); ?>
				<?php echo aq_field_multiselect('category', $block_id, $all_terms, $category); ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('orderby') ?>">
				<?php _e('Order By','engine'); ?>
				<?php echo aq_field_select('orderby', $block_id, $orderby_options, $orderby) ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('asc') ?>">
				<?php _e('Order','engine'); ?>
				<?php echo aq_field_select('asc', $block_id, $order_options, $asc); ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('excerpt_length') ?>">
				<?php _e('Excerpt Length (optional)','engine'); ?>
				<?php echo aq_field_input('excerpt_length', $block_id, $excerpt_length, $size = 'full') ?>
			</label>
		</p>
		
		<?php
	}
	
	function block($instance) {
	
	
		extract($instance);
		
		$size = filter_var($size, FILTER_SANITIZE_NUMBER_INT);
		
		if(!isset($category)) $category = array();
		if(!isset($random)) { $random = '0'; }
		if(!isset($orderby)) $orderby = 'date';
		if(!isset($asc)) $asc = 'DESC';
		if(!isset($style)) $style = 'title';
		if(!isset($excerpt_length)) $excerpt_length = '17';
		
		$category = implode(', ', $category);

		$img_src = wp_get_attachment_image_src($image_id,'full',false);
		
		echo do_shortcode('[engine_rubrica title="'.$title.'" author="'.$author.'" img="'.$img_src[0].'" style="'.$style.'" category="'.$category.'" qty="'.$qty.'" orderby="'.$orderby.'" order="'.$asc.'" excerpt_length="'.$excerpt_length.'"]');
	}
	
}