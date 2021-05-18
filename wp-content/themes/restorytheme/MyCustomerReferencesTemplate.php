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
                <div class="myInfo">
                    <h4>Vi har jobbat med flera kunder, här är några</h4>
                    <p>
                        0 Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ex sequi ab qui, ratione aut rerum eius nulla aspernatur
                        repudiandae id officia perspiciatis eligendi commodi libero facere. Perspiciatis, eos earum.
                    </p>
                </div>
                <div class="myDiv" data-target="volvo">
                    <img class="img-fluid" src="https://www.volvogroup.com/se/about-us/what-we-do/our-brands/_jcr_content/root/responsivegrid/columncontrol/parsys1/teaser.coreimg.82.512.jpeg/1615455250180/1860x1050-volvo-iron.jpeg" alt="Volvo">
                    <p>
                        1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ex sequi ab qui, ratione aut rerum eius nulla aspernatur
                        repudiandae id officia perspiciatis eligendi commodi libero facere. Perspiciatis, eos earum.
                    </p>
                </div>
                <div class="myDiv" data-target="ericsson">
                    <img class="img-fluid" src="https://www.ser.se/explorer/images/logo-ericsson.png" alt="Ericsson">
                    <p>
                        2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ex sequi ab qui, ratione aut rerum eius nulla aspernatur
                        repudiandae id officia perspiciatis eligendi commodi libero facere. Perspiciatis, eos earum.
                    </p>
                </div>
                <div class="myDiv" data-target="academedia">
                    <img class="img-fluid" src="https://medarbetare.academedia.se/wp-content/uploads/2018/01/Logga_lila.jpg" alt="Academedia">
                    <p>
                        3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ex sequi ab qui, ratione aut rerum eius nulla aspernatur
                        repudiandae id officia perspiciatis eligendi commodi libero facere. Perspiciatis, eos earum.
                    </p>
                </div>
                <div class="myDiv" data-target="newton">
                    <img class="img-fluid" src="https://www.fastighetsmassansyd.se/wp-content/uploads/sites/33/2020/02/Logo-orange-platta-1.png" alt="Newton">
                    <p>
                        4 Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ex sequi ab qui, ratione aut rerum eius nulla aspernatur
                        repudiandae id officia perspiciatis eligendi commodi libero facere. Perspiciatis, eos earum.
                    </p>
                </div>
                <div class="myDiv" data-target="ihm">
                    <img class="img-fluid" src="https://www.cellipbloggen.se/wp-content/uploads/2019/06/IHM.jpg" alt="IHM">
                    <p>
                        5 Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ex sequi ab qui, ratione aut rerum eius nulla aspernatur
                        repudiandae id officia perspiciatis eligendi commodi libero facere. Perspiciatis, eos earum.
                    </p>
                </div>
            </div>
            <!-- <?php the_content(); ?> -->
        </div>
    </div>
</article>

<?php get_footer() ?>