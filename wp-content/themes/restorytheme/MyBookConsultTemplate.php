<?php
/* Template Name: My-Book-Consult */
get_header()
?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2><?php the_title() ?></h2>
    </div>
</div>
<article class="px-3 py-5 p-md-5">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <form action="<?php the_permalink() ?>" method="POST">

                </form>
            </div>
        </div>
    </div>
</article>

<?php get_footer() ?>