<?php
/*Arquivo para "criar" a listagem dos cards dos médicos de acordo com o item da busca da especialidade, estilo o funcionário.php que thiago criou no doc dele.*/
require "../dados/medicos.php";
    //if (isset($_GET["especialidade"])&&($_GET["especialidade"]==0 ||$_GET["especialidade"]==5 ||$_GET["especialidade"]==10 ||$_GET["especialidade"]==15 ||$_GET["especialidade"]==20)) {
    if (isset($_GET["especialidade"])){
        $especialidade = $_GET ["especialidade"];
    }else{
      header("location: ../index.php");
      die;
    }


    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../estilos/estilo.css" rel="stylesheet">
    <title>Consulta+</title>
</head>
<body>
    <h1>Nossos médicos: </h1>
    <!--Aqui agnt vai ter que pegar o vetor de médicos e criar uma class para mostrar os médicos em "cards" mostrar a foto o nome e as descrições, não podendo ocupar a tela toda, colocar pelo menos 2 em cada parte da tela. (CRIAR CLASS CARD NO CSS TBM)-->
    <?php
       // for ($j=0; $j < 5; $j++,$i++) {
       //     $mdcs = $medicos[$i]; 
       foreach($medicos as $mdcs){
        if($mdcs["especialidade"] == $especialidade){
    ?>
    <div class="med-lista">
        <div class="med-img-lista">
            <img src="<?=$mdcs["foto"]?>" alt="<?=$mdcs["nome"]?>" class="img-li">
        </div>
        <div class="info-med">
            <h2><?=$mdcs["nome"]?></h2>
            <h3><?=$mdcs["especialidade"]?></h3>
            <p><?=$mdcs["formação"]?></p>
        </div>
        <a href="contato.php"><h4>Realizar Agendamento</h4></a>
    </div>
    <?php
        } 
    }
    ?>
    <a href="../index.php" class="link">Voltar</a>
</body>
</html>