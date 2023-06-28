<?php

    while(have_posts()): the_post();
?>
    <h1 class="text-center texto-primary"> <?php the_title(); ?></h1>
<?php
        if(has_post_thumbnail()) {
            the_post_thumbnail('full', ['class' => 'imagen-destacada']);
        }
        if(is_single()) {
?>
            <p class="informacion-clase">
                <?php the_field('dias_clase'); ?> -
                <?php the_field('hora_inicio'); ?> a
                <?php the_field('hora_fin'); ?>
            </p>
<?php
        }

        the_content();
    endwhile;
?>
