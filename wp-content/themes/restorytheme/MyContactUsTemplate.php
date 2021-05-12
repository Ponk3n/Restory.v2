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
$no_agree           = "Du behöver kryssa i 'Jag samtycker'";
$missing_content    = "Var god och fyll i alla nödvändiga fält.";
$email_invalid      = "Ogiltig e-mail adress.";
$message_unsent     = "Meddelandet skickades inte, var god och försök igen.";
$message_sent       = "Ditt meddelande har sänts, tack!";

// user posted variables
$firstName = $_POST['firstNameInput'];
$lastName = $_POST['lastNameInput'];
$email = $_POST['E-MailInput'];
$phoneNumber = $_POST['PhoneNumberInput'];
$message = $_POST['MessageInput'];
$agreeCheck = $_POST['AgreeCheck'];

// php mailer variables
$to = get_option('admin_email');
$subject = "Någon skickade ett meddelande från " . get_bloginfo('name');
$headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";

if ($_POST['AgreeCheck'] == 'hasAgreed') {
    if ($_POST['AgreeCheck'] != 'hasAgreed') my_contact_form_generate_response("error", $no_agree);
    else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) my_contact_form_generate_response("error", $email_invalid);
        else {
            if (empty($firstName) || empty($lastName) || empty($message)) {
                my_contact_form_generate_response("Error", $missing_content);
            } else {
                $sent = wp_mail($to, $subject, strip_tags($message), $headers);
                if ($sent) my_contact_form_generate_response("success", $message_sent);
                else my_contact_form_generate_response("Error", $message_unsent);
            }
        }
    }
} else if ($_POST['submitted']) my_contact_form_generate_response("Error", $missing_content);
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
                        <input type="text" class="form-control customInputFocus" id="firstNameInput" name="firstNameInput" value="<?php echo esc_attr($_POST['firstNameInput']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="lastNameInput">Efternamn</label><span>*</span>
                        <input type="text" class="form-control customInputFocus" id="lastNameInput" name="lastNameInput" value="<?php echo esc_attr($_POST['lastNameInput']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="E-MailInput">E-Mail</label><span>*</span>
                        <input type="email" class="form-control customInputFocus" id="E-MailInput" name="E-MailInput" value="<?php echo esc_attr($_POST['E-MailInput']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="PhoneNumberInput">Telefonnummer</label><span>*</span>
                        <input type="text" class="form-control customInputFocus" id="PhoneNumberInput" name="PhoneNumberInput" value="<?php echo esc_attr($_POST['PhoneNumberInput']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="MessageInput">Meddelande</label><span>*</span>
                        <textarea rows="4" cols="10" placeholder="Skriv meddelande här..." class="form-control customInputFocus" id="MessageInput" name="MessageInput" value="<?php echo esc_textarea($_POST['MessageInput']); ?>"></textarea>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="AgreeCheck" name="AgreeCheck" value="hasAgreed">
                        <label class="form-check-label" for="AgreeCheck">Jag samtycker</label>
                    </div>
                    <input type="hidden" name="submitted" value="1">
                    <p><input type="submit"></p>
                </form>
            </div>
        </div>
    </div>
</article>

<?php get_footer() ?>