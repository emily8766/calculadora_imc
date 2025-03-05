<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="titulo">
            <h1> CALCULADORA DE IMC </h1>
            <p> A Calculadora de IMC é uma ferramenta simples e prática que permite calcular o
                índice de massa corporal de uma pessoa a partir de sua altura e peso. O IMC é um valor numérico
                utilizado para avaliar se uma pessoa está dentro de um peso saudável, de acordo com a sua altura.</p>
        </div>

        <div class="resultado">
    
        <?php
        if ( isset($_POST['peso']) && isset($_POST['altura'])) {
           
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];

            // Cálculo do IMC
            $imc = $peso / ($altura * $altura);
            // Formatação do IMC para 2 casas decimais
            $imc_formatado = number_format($imc, 2, ',', '');

            if ($imc < 18.5) {
                echo "Seu IMC deu " . $imc_formatado . ". <strong> BAIXO PESO </strong>: É recomendado procurar um médico para avaliação criteriosa do resultado. Pode indicar um estado de consumo do organismo, com poucas reservas e riscos associados.";
            } else if ($imc >= 18.5 && $imc <= 24.9) {
                echo "Seu IMC deu " . $imc_formatado . ". <strong> PESO IDEAL </strong>: Tudo indica que está tudo bem, mas é importante avaliar outros parâmetros da composição corporal, para compreender se estão dentro do recomendado. Algumas pessoas apresentam IMC dentro da normalidade, mas têm circunferência abdominal maior que a recomendada e/ou quantidade de massa gorda acima do ideal.";
            } else if ($imc >= 25 && $imc <= 29.9) {
                echo "Seu IMC deu " . $imc_formatado . ". <strong> SOBREPESO </strong>: O sobrepeso está associado ao risco de doenças como diabetes e hipertensão. Então, atenção! Consulte um médico e reveja hábitos para reverter o quadro. Também é importante avaliar outros parâmetros, como a circunferência abdominal.";
            } else if ($imc >= 30) {
                echo "Seu IMC deu " . $imc_formatado . ". <strong> OBESIDADE </strong>: É importante buscar orientação médica e nutricional para entender melhor o seu caso, mesmo que os exames (colesterol e glicemia, por exemplo) estejam normais.";
            }
        }
        ?>
        </div>
        <div class="rodape">
            <p> © EMILY DANTAS SOUZA - Todos os direitos reservados.</p>
        </div>
    </div>
</body>
</html>