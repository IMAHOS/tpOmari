<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: authentification.php');
    exit();
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: authentification.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue</title>
</head>
<body>
    <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <a href="?logout=true">Se déconnecter</a>
</body>
</html>
