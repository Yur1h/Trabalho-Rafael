<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $voto = $_POST["voto"];


    echo "<h2>Obrigado por votar!</h2>";
    echo "<p>Seu voto para $voto foi registrado com sucesso.</p>";
} else {
    echo "Acesso inválido!";
}
?>
