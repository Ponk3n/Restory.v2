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
            <div class="col-3 radioButtonsReferences">
                <input type="radio" id="radioVolvo" name="toggleCompany" class="radioBtn" data-target-id="volvo">
                <label for="radioVolvo">Volvo</label>

                <input type="radio" id="radioEricsson" name="toggleCompany" class="radioBtn" data-target-id="ericsson">
                <label for="radioEricsson">Ericsson</label>

                <input type="radio" id="radioAcademedia" name="toggleCompany" class="radioBtn" data-target-id="academedia">
                <label for="radioAcademedia">Academedia</label>

                <input type="radio" id="radioNewton" name="toggleCompany" class="radioBtn" data-target-id="newton">
                <label for="radioNewton">Newton</label>

                <input type="radio" id="radioIHM" name="toggleCompany" class="radioBtn" data-target-id="ihm">
                <label for="radioIHM">IHM</label>
            </div>
            <div class="col-9">
                <div class="myDiv" data-target="volvo">
                    hej
                </div>
                <div class="myDiv" data-target="ericsson">
                    hallå
                </div>
                <div class="myDiv" data-target="academedia">
                    tjena
                </div>
                <div class="myDiv" data-target="newton">
                    Kolla
                </div>
                <div class="myDiv" data-target="ihm">
                    här
                </div>
            </div>
            <!-- <?php the_content(); ?> -->
        </div>
    </div>
</article>

<?php get_footer() ?>