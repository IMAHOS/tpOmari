<!DOCTYPE html>
<html>
<head>
    <title>Mini Quiz</title>
</head>
<body>
    <form method="post">
        <h3>1. Quelle est la capitale de la France ?</h3>
        <input type="radio" name="q1" value="Paris" required> Paris<br>
        <input type="radio" name="q1" value="Londres"> Londres<br>
        <input type="radio" name="q1" value="Berlin"> Berlin<br>

        <h3>2. Quel est le résultat de 5 + 3 ?</h3>
        <input type="radio" name="q2" value="8" required> 8<br>
        <input type="radio" name="q2" value="10"> 10<br>
        <input type="radio" name="q2" value="6"> 6<br>

        <h3>3. Quelle est la couleur du ciel par temps clair ?</h3>
        <input type="radio" name="q3" value="Bleu" required> Bleu<br>
        <input type="radio" name="q3" value="Vert"> Vert<br>
        <input type="radio" name="q3" value="Rouge"> Rouge<br>

        <button type="submit">Soumettre</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $answers = [
            'q1' => 'Paris',
            'q2' => '8',
            'q3' => 'Bleu'
        ];

        $score = 0;
        foreach ($answers as $question => $correctAnswer) {
            if (isset($_POST[$question]) && $_POST[$question] === $correctAnswer) {
                $score++;
                echo "<p>Question $question : Correct</p>";
            } else {
                echo "<p>Question $question : Faux (Réponse correcte : $correctAnswer)</p>";
            }
        }

        echo "<h3>Score final : $score / " . count($answers) . "</h3>";
    }
    ?>
</body>
</html>
