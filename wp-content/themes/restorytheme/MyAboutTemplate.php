<?php
/* Template Name: My-About */
get_header()
?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1><?php the_title() ?></h1>
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