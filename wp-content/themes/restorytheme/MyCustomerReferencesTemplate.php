<?php
/* Template Name: My-References */
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
            <div class="col-3" id="toggleCompany">
                <label class="button">
                    <input type="radio" value="volvo"> Volvo
                </label>
            </div>
            <div class="col-9">
                <div id="volvoDiv">

                </div>

            </div>
            <?php the_content(); ?>
        </div>
    </div>
</article>

<?php get_footer() ?>