<?php
/*Arquivo para "criar" a listagem dos cards dos médicos de acordo com o item da busca da especialidade, estilo o funcionário.php que thiago criou no doc dele.*/
require "medicos.php";
    if (isset($_GET["i"])) {
        $i =$_GET ["i"];
    }else{
      header("location: index.php");
      die;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta+</title>
</head>
<body>
    <h1>Nossos médicos: </h1>
    <!--Aqui agnt vai ter que pegar o vetor de médicos e criar uma class para mostrar os médicos em "cards" mostrar a foto o nome e as descrições, não podendo ocupar a tela toda, colocar pelo menos 2 em cada parte da tela. (CRIAR CLASS CARD NO CSS TBM)-->
    <div>
    <img src="<?=$m["foto"]?>" alt="<?=$m["nome"]?>">
			<h3><?=$m["nome"]?></h3>
			<h4><?=$m["especialidade"]?></h4>
			<p><?=$m["formação"]?></p>
			<a href="../index.php" class="link">Voltar</a>
    </div>
</body>
</html>