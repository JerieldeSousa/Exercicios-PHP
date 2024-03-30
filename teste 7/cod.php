<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Meu site </h1>
    <main>
        <?php 
            $nome= $_GET["nome"]?? "sem nome";
            $sobrenome= $_GET["sobrenome"]?? "desconhecido"; 
            echo "<p> é um prazer te conhecer, <strong> $nome      $sobrenome </strong> este é o meu site"
         ?>
         <h2>jeriel de sousa</h2>
         <img src="jerieldesousa.jpg" alt="duro" height="20%" width="20%">
        <p><a href="javascript:history.go(-1)">voltar para pagina anterior</a></p>
    </main>
</body>
</html>