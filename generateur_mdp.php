<!DOCTYPE html>
<html>
<head>
    <title>Générateur de mot de passe</title>
</head>
<body>
    <form method="post">
        <label for="length">Longueur du mot de passe :</label>
        <input type="number" name="length" id="length" min="4" required>
        <button type="submit">Générer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $length = $_POST['length'];
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[random_int(0, strlen($characters) - 1)];
        }

        echo "<p>Mot de passe généré : $password</p>";
    }
    ?>
</body>
</html>
