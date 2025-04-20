<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Contact</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Message" required></textarea>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if ($nom && $email && $message) {
            echo "<p>Nom : $nom</p>";
            echo "<p>Email : $email</p>";
            echo "<p>Message : $message</p>";
        } else {
            echo "<p>Veuillez remplir tous les champs.</p>";
        }
    }
    ?>
</body>
</html>
