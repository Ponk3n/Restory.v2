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
                <form action="<?php the_permalink() ?>" method="post">
                    <div class="form-group">
                        <label for="firstNameInput">Förnamn</label><span>*</span>
                        <input type="text" class="form-control customInputFocus" id="firstNameInput" name="firstNameInput" required>
                    </div>
                    <div class="form-group">
                        <label for="lastNameInput">Efternamn</label><span>*</span>
                        <input type="text" class="form-control customInputFocus" id="lastNameInput" name="lastNameInput" required>
                    </div>
                    <div class="form-group">
                        <label for="E-MailInput">E-Mail</label><span>*</span>
                        <input type="email" class="form-control customInputFocus" id="E-MailInput" name="E-MailInput" required>
                    </div>
                    <div class="form-group">
                        <label for="PhoneNumberInput">Telefonnummer</label><span>*</span>
                        <input type="text" class="form-control customInputFocus" id="PhoneNumberInput" name="PhoneNumberInput" required>
                    </div>
                    <div class="form-group">
                        <label for="MessageInput">Meddelande</label><span>*</span>
                        <textarea rows="4" cols="10" placeholder="Skriv meddelande här..." class="form-control customInputFocus" id="MessageInput" name="MessageInput" required></textarea>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="AgreeCheck" name="AgreeCheck" value="hasAgreed" required>
                        <label class="form-check-label" for="AgreeCheck">Jag samtycker</label>
                    </div>
                    <input type="hidden" name="submitted" value="1">
                    <button type="submit" class="button">Skicka</button>
                </form>
            </div>
        </div>
    </div>
</article>

<?php get_footer() ?>