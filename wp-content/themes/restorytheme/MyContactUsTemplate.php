<?php
// response generation function
$response = "";

// function to generate response
function my_contact_form_generate_response($type, $message)
{
    global $response;

    if ($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
}

// response messages
$message_unsent     = "Meddelandet skickades inte, var god och försök igen.";
$message_sent       = "Ditt meddelande har sänts, tack!";

// user posted variables
$firstName = $_POST['firstNameInput'];
$lastName = $_POST['lastNameInput'];
$email = $_POST['E-MailInput'];
$phoneNumber = $_POST['PhoneNumberInput'];
$message = $_POST['MessageInput'];

// php mailer variables
$to = get_option('admin_email');
$subject = "Någon skickade ett meddelande från " . get_bloginfo('name');
$headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";


$sent = wp_mail($to, $subject, strip_tags($firstName, $lastName, $phoneNumber, $message), $headers);
if ($sent) my_contact_form_generate_response("success", $message_sent);
else my_contact_form_generate_response("Error", $message_unsent);

?>

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
            <div class="col-5" id="respond">
                <?php echo $response; ?>
                <form action="<?php the_permalink() ?>" method="post">
                    <div class="form-group">
                        <label for="firstNameInput">Förnamn</label><span>*</span>
                        <input type="text" class="form-control customInputFocus" id="firstNameInput" name="firstNameInput" value="<?php echo esc_attr($_POST['firstNameInput']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="lastNameInput">Efternamn</label><span>*</span>
                        <input type="text" class="form-control customInputFocus" id="lastNameInput" name="lastNameInput" value="<?php echo esc_attr($_POST['lastNameInput']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="E-MailInput">E-Mail</label><span>*</span>
                        <input type="email" class="form-control customInputFocus" id="E-MailInput" name="E-MailInput" value="<?php echo esc_attr($_POST['E-MailInput']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="PhoneNumberInput">Telefonnummer</label><span>*</span>
                        <input type="text" class="form-control customInputFocus" id="PhoneNumberInput" name="PhoneNumberInput" value="<?php echo esc_attr($_POST['PhoneNumberInput']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="MessageInput">Meddelande</label><span>*</span>
                        <textarea rows="4" cols="10" placeholder="Skriv meddelande här..." class="form-control customInputFocus" id="MessageInput" name="MessageInput" value="<?php echo esc_textarea($_POST['MessageInput']); ?>" required></textarea>
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