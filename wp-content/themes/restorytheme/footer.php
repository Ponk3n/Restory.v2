<?php wp_footer(); ?>

<footer>
    <div class="container-fluid">
        <div class="row myCustomFooter">
            <div class="col-10 vertical-top d-flex">

                <div class="footerContact">
                    <h4>Restory</h4>
                    <p>+46 123 123 12</p>
                    <p>exempel@mailtest.com</p>
                </div>

                <div class="footerList" id="">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'footer',
                            'container' => '',
                            'theme_location' => 'footer',
                            'items_wrap' => '<ul id="" class="">%3$s</ul>'
                        )
                    );
                    ?>
                </div>
            </div>
            <div class="col-2 socialMediaWrapper">
                <div class="row socialMedia">
                    <div>
                        <a href="#" alt="instagram">
                            <i class="fab fa-instagram fa-2x footerIcon"></i>
                        </a>
                    </div>
                    <div>
                        <a href="#" alt="twitter">
                            <i class="fab fa-twitter fa-2x footerIcon"></i>
                        </a>
                    </div>
                    <div>
                        <a href="#" alt="facebook">
                            <i class="fab fa-facebook-square fa-2x footerIcon"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
</div>
</body>

</html>