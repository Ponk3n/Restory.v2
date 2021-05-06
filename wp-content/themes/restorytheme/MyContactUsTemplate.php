<?php
/* Template Name: My-Contact */
get_header()
?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h3><?php the_title() ?></h3>
    </div>
</div>
<article class="px-3 py-5 p-md-5">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <?php the_content(); ?>
            </div>
            <div class="col-7">

            </div>
        </div>
    </div>
</article>

<?php get_footer() ?>