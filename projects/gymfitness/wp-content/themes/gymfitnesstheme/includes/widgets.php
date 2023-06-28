<?php

if(!defined('ABSPATH')) die();

class GymFitness_Porfolio_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'gymfitness_widget',
			esc_html__( 'Portfolio', 'gymfitness' ),
			array( 'description' => esc_html__( 'Add Portfolio as a Widget', 'gymfitness' ), )
		);
	}

	public function widget( $args, $instance ) {
        ?>
        <ul class="clases-sidebar">
            <?php
                $args = [
                    'post_type' => 'gymfitness_portfolio',
                    'posts_per_page' => $instance['cantidad'],
                    'order' => 'asc',
                    'order_by' => 'title'
                ];
                $clases = new WP_Query($args);

                while ($clases->have_posts()) {
                    $clases->the_post();
                    ?>
                        <li>
                            <div class="imagen">
                            
                                <?php the_post_thumbnail('thumbnail')?>
                            </div>
                            <div class="contenido-clase">
                                <a href="<?php the_permalink();?>">
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                                </a>
                                <p>
                                    <?php the_field('dias_clase'); ?> -
                                    <?php the_field('hora_inicio'); ?> a
                                    <?php the_field('hora_fin'); ?>
                                </p>
                            </div>
                        </li>
                    <?php
                }
                wp_reset_postdata(); // Finalizar consulta especializada
            ?>

        </ul>
        <?php
	}

    public function form( $instance ) {
        $cantidad = !empty( $instance['cantidad'] ) ?
            $instance['cantidad'] :
            esc_html('How many class do yu want showing?');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('cantidad'))?>">
                <?php echo esc_attr_e('How many class do yu want showing?');?>
            </label>

            <input
                class="widefat"
                id="<?php echo esc_attr($this->get_field_id('cantidad'))?>"
                name="<?php echo esc_attr($this->get_field_name('cantidad'))?>"
                type="number"
                value="<?php echo esc_attr($cantidad)?>"
            />
        </p>
        <?php
   	}

	public function update( $new_instance, $old_instance ) {
        $instance = [];
        $instance['cantidad'] = !empty( $new_instance['cantidad'] ) ?
        sanitize_text_field($new_instance['cantidad']) : '';

        return $instance;
	}
}

function gymfitness_registrar_widget() {
    register_widget( 'GymFitness_Porfolio_Widget' );
}
add_action( 'widgets_init', 'gymfitness_registrar_widget' );