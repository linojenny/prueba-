<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $imc = $peso / ($altura * $altura);
    echo "<div class='container mt-3'>";
    echo "<h3>Resultado del IMC:</h3>";
    echo "<p>Peso: $peso kg</p>";
    echo "<p>Altura: $altura m</p>";
    echo "<p>IMC: " . number_format($imc, 2) . "</p>";
    echo "</div>";
}
?>
