<?php
    /**
     * Template Name: Gallery
     */
    get_header();
?>
    <main class="contenedor seccion">
    <?php

        while(have_posts()): the_post();
    ?>
            <h1 class="text-center texto-primary"> <?php the_title(); ?></h1>
            <?php
                $gallery = get_post_gallery(get_the_ID(), false);
                //obtener los ids en un array
                $gallery_images_ID = explode(",", $gallery['ids']);
            ?>
                <ul class="galeria-imagenes">
                <?php
                    foreach ($gallery_images_ID as $id) {
                        $image_large = wp_get_attachment_image_src($id, 'large')[0];
                        $image_full = wp_get_attachment_image_src($id, 'full')[0];
                ?>
                        <li>
                            <a data-lightbox="gallery" href="<?php echo $image_full;?>">
                                <img src="<?php echo $image_large;?>" alt="imagen galeria">
                            </a>
                        </li>
                <?php
                    }
                ?>
                </ul>
            <?php
                    
        endwhile;
            ?>
    </main>

<?php
    get_footer();
?>