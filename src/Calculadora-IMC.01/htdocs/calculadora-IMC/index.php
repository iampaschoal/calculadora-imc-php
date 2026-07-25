<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>PHP</title>
        <link rel="stylesheet" href="imc.css">
    </head>
    <body>

    <div class="calculadora">
        <h1>Calculadora de IMC</h1>

    <form method = "get" action = "index.php">

        <label>Peso (kg)</label>
        <input type="number" name = "peso" 
        placeholder="Ex: 70"
        required
        />

        <label>Altura (m)</label>  
            <input type="number" 
            name = "altura" step="0.01" 
            placeholder="Ex: 1.75"
            required
        />

        <button type = "submit">
            Calcular IMC
        </button>

    </form>

    <div class="resultado">
        Seu IMC:

        <?php

        $peso = (isset($_GET["peso"])) ? $_GET["peso"] : 0;
        $altura = (isset($_GET["altura"])) ? $_GET["altura"] : 0;

        $imc_user = 0;

        function imc(float $peso, float $altura){
            if($altura <= 0){
                return null;
            }
            
            return $peso / ($altura * $altura);
        }

        $imc_user = imc($peso, $altura);
        
        echo round ($imc_user, 2);

        echo "<br>";

        if($imc_user < 18.5){
            echo "Abaixo do peso";
        }else if($imc_user >= 18.5 && $imc_user <= 24.9){
            echo "Peso Normal";
        }else if($imc_user >= 25 && $imc_user <= 29.9){
            echo "Sobrepeso";
        }else if($imc_user >= 30 && $imc_user <= 34.9){
            echo "Obesidade grau I";
        }else if($imc_user >= 35 && $imc_user <= 39.9){
            echo "Obesidade grau II";
        }else if($imc_user >= 40){
            echo "Obesidade grau III";
        }

       ?>

        </div>

    <footer>
    <p>&copy; 2026 Lucas Paschoalini. Todos os direitos reservados.</p>
    </footer>

    </div>


    </body>
</html>

