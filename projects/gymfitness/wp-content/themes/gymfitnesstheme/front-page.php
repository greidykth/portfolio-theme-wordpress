<?php
    get_header();
?>

    <section class="bienvenida seccion contenedor text-center">
        <h2 class="text-primary">
            <?php the_field('header_welcome'); ?>
        </h2>
        <p><?php the_field('text_welcome'); ?></p>
    </section>

    <section class="areas">
        <div class="area">
            <?php
                $area1 = get_field('area_1');
                $image = $area1['image']['sizes']['medium_large'];
                $text = $area1['text'];
            ?>
            <img src="<?php echo esc_attr( $image ); ?>" alt="Image <?php echo esc_attr($text); ?>">
            <p><?php echo esc_html( $text ); ?></p>
        </div>

        <div class="area">
            <?php
                $area2 = get_field('area_2');
                $image = $area2['image']['sizes']['medium_large'];
                $text = $area2['text'];
            ?>
            <img src="<?php echo esc_attr( $image ); ?>" alt="Image <?php echo esc_attr($text); ?>">
            <p><?php echo esc_html( $text ); ?></p>
        </div>

        <div class="area">
            <?php
                $area3 = get_field('area_3');
                $image = $area3['image']['sizes']['medium_large'];
                $text = $area3['text'];
            ?>
            <img src="<?php echo esc_attr( $image ); ?>" alt="Image <?php echo esc_attr($text); ?>">
            <p><?php echo esc_html( $text ); ?></p>
        </div>

        <div class="area">
            <?php
                $area4 = get_field('area_4');
                $image = $area4['image']['sizes']['medium_large'];
                $text = $area4['text'];
            ?>
            <img src="<?php echo esc_attr( $image ); ?>" alt="Image <?php echo esc_attr($text); ?>">
            <p><?php echo esc_html( $text ); ?></p>
        </div>
    </section>

    <main class="contenedor seccion">
        <h2 class="text-center text-primary">My Portfolio</h2>

        <?php gymfitness_lista_clases(4); ?>

        <div class="contenedor-boton">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title('My Class') ) ); ?>" class="boton boton-primario">
                All Projects
            </a>
        </div>
    </main>

    <section class="contenedor seccion">
        <h2 class="text-center text-primary">Nuestros Instructores</h2>
        <p class="text-center">Instructores profesionales que te ayudarán a lograr tus objetivos</p>

        <?php gymfitness_instructores(); ?>
    </section>

    <section class="testimoniales">
        <h2 class="text-center texto-blanco">Testimoniales</h2>

        <div class="contenedor-testimoniales swiper">
            <?php gymfitness_testimoniales(); ?>
        </div>
    </section>

    <section class="contenedor seccion">
        <h2 class="text-center text-primary">My Blog</h2>
        <p class="text-center">Aprende tips de nuestros instructores expertos</p>

        <ul class="listado-grid">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4
                );
                $blog = new WP_Query($args);
                while($blog->have_posts()) {
                    $blog->the_post();

                    get_template_part('template-parts/blog');
                }
                wp_reset_postdata();
            ?>
        </ul>
    </section>
    
<?php
    get_footer();
?>