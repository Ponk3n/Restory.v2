<?php
/* Template Name: My-Book-Consult */
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
            <div class="col">
                <form action="<?php the_permalink() ?>" method="POST">
                    <div class="row">
                        <div class="col-md-4 offset-md-2">
                            <!-- Input firstname -->
                            <div class="form-group">
                                <label for="firstNameInput">Förnamn</label><span>*</span>
                                <input type="text" class="form-control customInputFocus" id="firstNameInput" name="firstNameInput" required>
                            </div>
                            <!-- Input lastname -->
                            <div class="form-group">
                                <label for="lastNameInput">Efternamn</label><span>*</span>
                                <input type="text" class="form-control customInputFocus" id="lastNameInput" name="lastNameInput" required>
                            </div>
                            <!-- Input email -->
                            <div class="form-group">
                                <label for="emailInput">E-Mail</label><span>*</span>
                                <input type="email" class="form-control customInputFocus" id="emailInput" name="emailInput" required>
                            </div>
                            <!-- Input company name -->
                            <div class="form-group">
                                <label for="companyNameInput">Företagsnamn</label><span>*</span>
                                <input type="text" class="form-control customInputFocus" id="companyNameInput" name="companyNameInput" required>
                            </div>
                            <!-- Input phone number -->
                            <div class="form-group">
                                <label for="phoneNumberInput">Telefonnummer</label><span>*</span>
                                <input type="text" class="form-control customInputFocus" id="phoneNumberInput" name="phoneNumberInput" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- Input select service -->
                            <div class="form-group">
                                <label for="selectServiceInput">Typ av tjänst</label><span>*</span>
                                <select class="form-control customInputFocus" name="selectServiceInput" id="selectServiceInput" required>
                                    <option Selected>Välj...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <!-- Input Date -->
                            <div class="form-group">
                                <label for="startDateInput">Med start från</label><span>*</span>
                                <input type="date" class="form-control customInputFocus" name="startDateInput" id="startDateInput" min="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                            <!-- Input message -->
                            <div class="form-group">
                                <label for="messageInput">Meddelande</label><span>*</span>
                                <textarea rows="4" cols="10" placeholder="Skriv meddelande här..." class="form-control customInputFocus" id="messageInput" name="messageInput" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center m-3">
                        <button type="submit" class="button">Skicka</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</article>

<?php get_footer() ?>