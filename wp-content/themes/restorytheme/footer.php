<?php wp_footer(); ?>

<footer>
    <nav class="navbar navbar-expand-md myCustomFooter">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarFooter" aria-controls="navbarFooter" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars myIcon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarFooter">
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="" class="navbar-nav">%3$s</ul>'
                )
            );
            ?>
        </div>
    </nav>
</footer>
</div>
</body>

</html>