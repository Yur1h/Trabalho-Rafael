<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $plano = $_POST["plano"];
    


    echo "<h2>Obrigado, $nome!</h2>";
    echo "<p>Sua assinatura para o Plano $plano foi registrada com sucesso. Em breve, entraremos em contato com mais informações.</p>";


    header("refresh:5;url=agradecimento.html");
    exit();
} else {
    echo "Acesso inválido!";
}
?>
