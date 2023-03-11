<!DOCTYPE html>
<html>
<head>
    <title>Adivinhe o número</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        form {
            display: inline-block;
            margin-top: 30px;
        }
        input[type=text] {
            padding: 10px;
            border-radius: 5px;
            border: none;
            font-size: 18px;
            margin-right: 10px;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type=submit]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <?php
    // Gera um número aleatório entre 0 e 10
    $numero_aleatorio = rand(0, 10);

    // Verifica se o formulário foi enviado
    if(isset($_POST['adivinhar'])){
        // Obtém a resposta do usuário
        $resposta = $_POST['adivinhar'];

        // Verifica se a resposta é um número válido
        if(!is_numeric($resposta)){
            echo "<p style='color:red'>Por favor, digite um número válido!</p>";
        } else {
            // Converte a resposta para um inteiro
            $resposta = (int) $resposta;

            // Verifica se a resposta é igual ao número gerado aleatoriamente
            if($resposta == $numero_aleatorio){
                echo "<h2 style='color:green'>Parabéns, você acertou o número!</h2>";
            } else {
                echo "<h2 style='color:red'>Que pena, você errou. O número correto era: " . $numero_aleatorio . "</h2>";
            }
        }
    }
    ?>
    <h1>Adivinhe o número entre 0 e 10</h1>
    <form method="POST">
        <label for="adivinhar">Digite um número:</label>
        <input type="text" id="adivinhar" name="adivinhar" placeholder="Digite um número entre 0 e 10">
        <input type="submit" value="Adivinhar">
    </form>
</body>
</html>
