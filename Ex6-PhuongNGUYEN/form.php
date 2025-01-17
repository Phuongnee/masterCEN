<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    $errors = [];

    if (empty($name)) {
        $errors[] = 'Le nom est requis.';
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Une adresse e-mail valide est requise.';
    }

    if (empty($message)) {
        $errors[] = 'Le message est requis.';
    }

    if (empty($errors)) {
        // Envoyer l'email ou traiter les données
        echo '<p>Merci pour votre message, ' . $name . '. Nous vous contacterons bientôt.</p>';
    } else {
        echo '<ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
    }
}
?>