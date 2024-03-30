<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <p>
        <?php 
        $n = $_REQUEST ["num"] ?? 0;
        $an = $n - 1;
        $su = $n + 1;
        echo " o numero escolhido foi $n ";
        echo " o seu antecessor é $an ";
        echo "o seu sucessor é $su "
        ?>
        </p>
        <button onclick="javascript:history.go(-1)"> voltar</button>
    </main>
</body>
</html>      