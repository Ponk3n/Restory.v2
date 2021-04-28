<?php get_header() ?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://images.pexels.com/photos/2058128/pexels-photo-2058128.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://images.pexels.com/photos/1779487/pexels-photo-1779487.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://images.pexels.com/photos/1714208/pexels-photo-1714208.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Third slide">
        </div>
        <div class="carousel-caption d-none d-md-block">
            <h5>Boka konsult idag</h5>
            <a href="#" class="button">Boka</a>
        </div>
    </div>
</div>
<article class="px-3 py-5 p-md-5">



    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }


    ?>

</article>


<?php get_footer() ?>