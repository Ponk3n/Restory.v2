<?php get_header() ?>


<!--// Hero \\-->
<div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://images.pexels.com/photos/3829227/pexels-photo-3829227.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://images.pexels.com/photos/3829226/pexels-photo-3829226.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://images.pexels.com/photos/1714208/pexels-photo-1714208.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Third slide">
        </div>
        <div class="carousel-caption d-none d-md-block">
            <h1>Boka konsult idag</h1>
            <a href="#" class="button">Läs mer</a>
        </div>
    </div>
</div>
<article class="px-3 py-5 p-md-5">

    <!--// Kort grupp 1 \\-->
    <div>
        <div class="row justify-content-center">

            <h2 class="my-3">Våra Tjänster</h2>

        </div>
        <div class="row row-cols-5 justify-content-center">
            <div class="card myCustomCard">
                <img src="https://images.pexels.com/photos/2061168/pexels-photo-2061168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Card image" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">Lorem</h3>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sequi nemo, adipisci laudantium sint voluptates
                        quidem obcaecati delectus optio autem commodi dolores fuga veritatis at rerum quam deserunt? Dolores, dicta!
                    </p>
                    <a href="#" class="button">Läs mer</a>
                </div>
            </div>
            <div class="card myCustomCard">
                <img src="https://images.pexels.com/photos/2061168/pexels-photo-2061168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Card image" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">Lorem</h3>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sequi nemo, adipisci laudantium sint voluptates
                        quidem obcaecati delectus optio autem commodi dolores fuga veritatis at rerum quam deserunt? Dolores, dicta!
                    </p>
                    <a href="#" class="button">Läs mer</a>
                </div>
            </div>
            <div class="card myCustomCard">
                <img src="https://images.pexels.com/photos/2061168/pexels-photo-2061168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Card image" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">Lorem</h3>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sequi nemo, adipisci laudantium sint voluptates
                        quidem obcaecati delectus optio autem commodi dolores fuga veritatis at rerum quam deserunt? Dolores, dicta!
                    </p>
                    <a href="#" class="button">Läs mer</a>
                </div>
            </div>
            <div class="card myCustomCard">
                <img src="https://images.pexels.com/photos/2061168/pexels-photo-2061168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Card image" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">Lorem</h3>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sequi nemo, adipisci laudantium sint voluptates
                        quidem obcaecati delectus optio autem commodi dolores fuga veritatis at rerum quam deserunt? Dolores, dicta!
                    </p>
                    <a href="#" class="button">Läs mer</a>
                </div>
            </div>
        </div>
    </div>


    <?php
    /* if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    } */
    ?>

</article>


<?php get_footer() ?>