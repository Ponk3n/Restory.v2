<?php
/* Template Name: My-Services */
get_header()
?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h3><?php the_title() ?></h3>
    </div>
</div>
<article class="px-3 py-5 p-md-5">
    <div class="contianer">
        <div class="row">
            <?php the_content(); ?>
        </div>
    </div>
</article>

<?php get_footer() ?>