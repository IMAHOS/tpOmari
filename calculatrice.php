<!DOCTYPE html>
<html>
<head>
    <title>Calculatrice</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num1" placeholder="Nombre 1" required>
        <input type="number" name="num2" placeholder="Nombre 2" required>
        <select name="operation" required>
            <option value="add">Addition</option>
            <option value="sub">Soustraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = null;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'sub':
                $result = $num1 - $num2;
                break;
            case 'mul':
                $result = $num1 * $num2;
                break;
            case 'div':
                $result = $num2 != 0 ? $num1 / $num2 : "Erreur: Division par zéro";
                break;
        }

        echo "<p>Résultat: $result</p>";
    }
    ?>
</body>
</html>
