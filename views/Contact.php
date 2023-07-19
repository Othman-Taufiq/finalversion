<?php
$messageConfirmation = "";
$messageErreur = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    // Construire le contenu de l'e-mail
    $contenuEmail = "Nom : $nom\n";
    $contenuEmail .= "Adresse e-mail : $email\n\n";
    $contenuEmail .= "Message :\n$message";

    // Adresse e-mail de contact
    $adresseEmailContact = 'shadowinca@protonmail.com';

    // Envoyer l'e-mail
    $resultatEnvoi = mail($adresseEmailContact, $sujet, $contenuEmail);

    if ($resultatEnvoi) {
        $messageConfirmation = "Le message a été envoyé avec succès.";
    } else {
        $messageErreur = "Une erreur s'est produite lors de l'envoi du message.";
    }
}
?>
    <h1>Contactez-nous</h1>
    <?php if (!empty($messageConfirmation)) : ?>
        <div class="message-succes"><?php echo $messageConfirmation; ?></div>
    <?php endif; ?>
    <?php if (!empty($messageErreur)) : ?>
        <div class="message-erreur"><?php echo $messageErreur; ?></div>
    <?php endif; ?>

    <form action="" method="POST">
    <input type="hidden" name="action" value="contact">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br><br/>

        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>
        <br><br/>
        <label for="sujet">Sujet :</label>
        <input type="text" id="sujet" name="sujet" required>
        <br><br/>
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>
        <br><br/>
        <input type="submit" value="Envoyer votre message">
        <br><br/>
    </form>
