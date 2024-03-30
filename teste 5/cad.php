<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1> resultado </h1> 
    </header>
    <main>
        <<?php 
         $n = $_GET["nome"] ?? "sem nome";
         $s = $_GET["sobrenome"] ?? "desconhecido";
         ECHO "<p> é um prazer te conhecer, <strong> $n $s </strong> este é o meu site";
        ?>
        <ol>
        <!DOCTYPE html>
<html>
<head>
  <title>Página PHP com mídias</title>
</head>
<body>
  <h1>Mídias</h1>

  <h2>Imagem:</h2>
  <img src="yureny.jpg" width="20%" height="20%" alt="Descrição da imagem">

  <h2>Áudio:</h2>
  <audio controls>
    <source src="LeeHi_-_ONLY_(Lyrics)(256k).mp3" type="audio/mpeg">
    Seu navegador não suporta a reprodução de áudio.
  </audio>

  <h2>Vídeo:</h2>
  <video controls>
  <video src="VID-20231006-WA0083.mp4" controls autoplay height="20%" width="20%">
  </video>

</body>
</html>

    </ol>
        <p><a href="javascript:history.go(-1)">voltar para pagina anterior</a></p>
    </main>
</body>
</html>