<?php
/* Template Name: My-Contact */
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
            <div class="col-7">
                <?php the_content(); ?>
            </div>
            <div class="col-5">
                <form>
                    <div class="form-group">
                        <label for="firstNameInput">Förnamn</label>
                        <input type="text" class="form-control customInputFocus" id="firstNameInput">
                    </div>
                    <div class="form-group">
                        <label for="lastNameInput">Efternamn</label>
                        <input type="text" class="form-control customInputFocus" id="lastNameInput">
                    </div>
                    <div class="form-group">
                        <label for="E-MailInput">E-Mail</label>
                        <input type="email" class="form-control customInputFocus" id="E-MailInput">
                    </div>
                    <div class="form-group">
                        <label for="PhoneNumberInput">Telefonnummer</label>
                        <input type="text" class="form-control customInputFocus" id="PhoneNumberInput">
                    </div>
                    <div class="form-group">
                        <label for="MessageInput">Meddelande</label>
                        <textarea rows="4" cols="10" placeholder="Skriv meddelande här..." id="MessageInput" class="form-control customInputFocus"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</article>

<?php get_footer() ?>