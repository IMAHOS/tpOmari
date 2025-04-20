<!DOCTYPE html>
<html>
<head>
    <title>Livre d'or</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nom" placeholder="Votre nom" required>
        <textarea name="message" placeholder="Votre message" required></textarea>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    $file = 'messages.txt';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $message = $_POST['message'];
        $date = date('Y-m-d H:i:s');

        $entry = "Nom: $nom\nMessage: $message\nDate: $date\n---\n";
        file_put_contents($file, $entry, FILE_APPEND);

        echo "<p>Message enregistré !</p>";
    }

    if (file_exists($file)) {
        echo "<h2>Messages :</h2>";
        echo nl2br(file_get_contents($file));
    }
    ?>
</body>
</html>
