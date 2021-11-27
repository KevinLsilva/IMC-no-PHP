<?php
// Declaração das input
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];

// IMG peso dividido por altura x altura
$imc = $peso /($altura*$altura);
$imc = number_format($imc);

echo 'Cálculo IMC ';
echo "<br>";


if ($imc <= 18.5){
    echo "Sua Massa Corporal é: $imc <br>";
    echo "Estado Atual: Abaixo do peso";
}

else if ($imc <= 24.9){
    echo "Sua Massa Corporal é: $imc <br>";
    echo "Estado Atual: Peso normal";
}

else if ($imc <= 29.9){
    echo "Sua Massa Corporal é: $imc <br>";
    echo "Estado Atual: Sobrepeso";
}

else if ($imc <= 34.9){
    echo "Sua Massa Corporal é: $imc <br>";
    echo "Estado Atual: Obesidade grau 1";
}

else if ($imc <= 39.9){
    echo "Sua Massa Corporal é: $imc <br>";
    echo "Estado Atual: Obesidade grau 2";
}

else if ($imc >= 40){
    echo "Sua Massa Corporal é: $imc <br>";
    echo "Estado Atual: Obesidade grau 3 ";
}
