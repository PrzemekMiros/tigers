<?php

if ($_POST) {
    $name = isset($_POST['visitor_name']) ? filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING) : null;
    $email = isset($_POST['visitor_email']) ? filter_var($_POST['visitor_email'], FILTER_VALIDATE_EMAIL) : null;
    $message = htmlspecialchars($_POST['visitor_msg']);

    mail (
        'kontakt@futurewebstudio.pl',
        'Formularz kontaktowy - Przemek www',
        "Imię: $name \n
         Adres e-mail: $email \n
         Treść wiadomości: $message",
        "From: $name <$email>"
    );
}

?>
