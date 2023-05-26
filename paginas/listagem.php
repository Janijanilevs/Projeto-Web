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
    <link href="../../Projeto-Web/estilos/estilo.css" rel="stylesheet">
    <title>Consulta+</title>
</head>
<body> 
    <header id="topo">
        <a href="../index.php" class="logo-site">Consulta+</a>
        <div class="botao">
            <a href="" class="botao-cadastro-login">Entrar/Cadastrar<a>
        </div>
        <nav id="menu">
            <ul>
                <li><a href="../../Projeto-Web/paginas/pergunta.php">Pergunte aos profissionais</a></li>
                <li><a href="../../Projeto-Web/paginas/contato.php">Contato</a></li>
                <li><a href="../../Projeto-Web/paginas/ajuda.php">Ajuda</a></li>
            </ul>
        </nav>
    </header>
    <main id="main-list">
        <div id="tit">
            <h2>Nossos médicos:</h2>
        </div>
        
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
                <div id="identi">
                    <h2><?=$mdcs["nome"]?></h2>
                    <h3><?=$mdcs["especialidade"]?></h3>
                </div>
                <div id="formacao">
                    <p><?=$mdcs["formação"]?></p>
                </div>
            </div>
            <a href="contato.php" id="agendamento"><h4>Realizar Agendamento</h4></a>
        </div>
        <?php
            } 
        }
        ?>
        <a href="../index.php" id="voltar">Voltar</a>
    </main>
    <footer id="rodape">
        <div id="roda-1">
            <img src="../img/logo-rodape.png" class="logo-rodape">
            <div class="wrapper">

                <div id="sub-e">
                    <h3>Especialidades</h3>
                    <p>Cardiologia</p>
                    <p>Cirurgia Plastica</p>
                    <p>Nutrição</p>
                    <p>Ginecologia</p>
                    <p>Odontologia</p>
                </div>
                <div id="sub-cidade">
                    <h3>Estado</h3>
                    <p>Bahia</p>
                    <p>Minas Gerais</p>
                    <p>São Paulo</p>
                    <p>Pernambuco</p>
                    <p>Rio De Janeiro</p>
                </div>
            </div>
            <div class="redes-sociais">
                <a href="" title="Facebook"><img src="../img/face.png"></a>
                <a href="" title="Instagram"><img src="../img/insta.png"></a>
                <a href="" title="Whatsapp"><img src="../img/whats.png"></a>
            </div>
        </div>
        <div id="roda-2">
            <p class="ui-minha-autoral">Todos os Direitos Reservados &copy; Consulta+ 2023</p>
        </div>
    </footer>    
</body>
</body>
</html>