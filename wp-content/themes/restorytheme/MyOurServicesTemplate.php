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
    <div class="container">
        <div class="row MyContentRow">
            <div class="col-6 customWellBread">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet voluptatum dignissimos enim
                    officiis cumque sunt repellat numquam voluptatem itaque,mollitia dolorum, accusamus odit
                    dolorem! Aut animi itaque aspernatur repellendus id.
                </p>
                <a href="#" class="buttonDarkBackground">Läs mer</a>
            </div>
            <div class="col-6 customWellHeader">
                <span>
                    <h4>Kurser</h4>
                </span>
            </div>
            <?php the_content(); ?>
        </div>
        <div class="row MyContentRow">
            <div class="col-6 customWellHeader">
                <span>
                    <h4>Konsult</h4>
                </span>
            </div>
            <div class="col-6 customWellBread">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet voluptatum dignissimos enim
                    officiis cumque sunt repellat numquam voluptatem itaque,mollitia dolorum, accusamus odit
                    dolorem! Aut animi itaque aspernatur repellendus id.
                </p>
                <a href="#" class="buttonDarkBackground">Läs mer</a>
            </div>
            <?php the_content(); ?>
        </div>
    </div>
</article>

<?php get_footer() ?>