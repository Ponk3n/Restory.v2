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
                <label class="button">
                    <input type="radio" value="ericsson"> Ericsson
                </label>
                <label class="button">
                    <input type="radio" value="academedia"> Academedia
                </label>
                <label class="button">
                    <input type="radio" value="newton"> Newton
                </label>
                <label class="button">
                    <input type="radio" value="ihm"> IHM
                </label>
            </div>
            <div class="col-9">
                <div id="volvoDiv">
                    hej
                </div>
                <div id="ericssonDiv">
                    hallå
                </div>
                <div id="academediaDiv">
                    tjena
                </div>
                <div id="newtonDiv">
                    Kolla
                </div>
                <div id="ihmDiv">
                    här
                </div>
            </div>
            <?php the_content(); ?>
        </div>
    </div>
</article>

<?php get_footer() ?>