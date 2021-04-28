<?php get_header() ?>


<article>

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }

    dynamic_sidebar('sidebar-1');
    ?>

</article>


<?php get_footer() ?>