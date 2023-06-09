<?php
    include "dados/medicos.php";
    $m=$medicos[0];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consulta+ | Homepage</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos/estilo.css" rel="stylesheet">
</head>
<body>
    <header id="topo">
        <a href="index.php" class="logo-site">Consulta+</a>
        <div class="botao">
            <a href="paginas/contato.php" class="botao-cadastro-login">Entrar/Cadastrar<a>
        </div>
        <nav id="menu">
            <ul>
                <li><a href="paginas/pergunta.php">Pergunte aos profissionais</a></li>
                <li><a href="paginas/contato.php">Contato</a></li>
                <li><a href="paginas/ajuda.php">Ajuda</a></li>
            </ul>
        </nav>
    </header>
  
    <main>
        <section id="banner">
            <h2 class="titulo">O QUE VOCÊ GOSTARIA DE AGENDAR?</h2>
            <h3 class="sub">AGENDE SUAS CONSULTAS E TELECONSULTAS RÁPIDO E FÁCIL.</h3>
            <form action="paginas/listagem.php" method="get" id="form1">
                <button><img src="img/busca.png"></button>
                <select class="area" name="especialidade">
                    <option disabled selected value="">Qual especialidade você procura?</option>
                    <option value="Cardiologia">Cardiologia</option>
                    <option value="Cirurgia Plástica">Cirurgia Plastica</option>
                    <option value="Nutrição">Nutrição</option>
                    <option value="Ginecologia">Ginecologia</option>
                    <option value="Odontologia">Odontologia</option>
                </select>
            </form>
            <img src="img/medicos.png" alt="médicos do Consulta+">
        </section>

        <section id="detalhes-empresa">
            <h3 class="titdet">Quais são os benefícios da Consulta+?</h3>
            <br>
            <div class="container-itens">
                <article class="item">
                    <h3>Agenda Online Flexível</h3>
                    <img src="img/check.png" alt="check">
                </article>
                <article class="item">
                    <h3>Especialidades Médicas Diversas</h3>               
                    <img src="img/icon.png" alt="doutor">
                </article>
                <article class="item">
                    <h3>Fácil Implementação</h3>
                    <img src="img/check.png" alt="check">
                </article>
            </div>
            <a href="" class="botaozinho">
                <div class="botao-saibamais">
                    <h4>Saiba mais sobre nós</h4>
                </div>
            <a>
        </section>

        <section id="extra">
            <div id="container-extra">
                <div class="item-extra" id="item-1">
                    <h2 class="text-ex">VOCÊ SABIA?</h2>
                    <h4 class="text-ex">O Consulta+ possui planos a partir de apenas <br>R$109,90.</h4>
                </div>
                <div class="item-extra" id="item-2">
                    <h3 class="text-ex">ACEITAMOS DIVERSOS CONVÊNIOS: UNIMED, BRADESCO SAÚDE, ONE HEALTH e muito mais!</h3>
                </div>
                <div class="item-extra" id="item-3">
                    <h3 class="text-ex">QUER TIRAR ALGUMA DÚVIDA COM NOSSOS MÉDICOS?</h3>
                    <h3 id="perg">FAÇA JÁ A SUA PERGUNTA</h3>
                </div>
            </div>
        </section>

        <section id="principais-medicos">
            <div>
                <h1 id="title-med">Médicos Mais Procurados:</h1>
            </div>
            <div class="prin-medicos">
                <div id="posi-1">
                    <div class="med" id="med-1">
                        <a href="paginas/listagem.php?especialidade=Cardiologia"><img src="<?=$m["foto"]?>" alt="<?=$m["nome"]?>" class="img-mi"></a>
                        <h2><?=$m["nome"]?></h2>
                        <h3><?=$m["especialidade"]?></h3>
                        <a href="paginas/listagem.php?especialidade=Cardiologia"><h4 class="mmed">Mais Medicos da área de Cardiologia</h4></a>
                    </div>
                    <?php
                      $m=$medicos[5];
                    ?>
                    <div class="med" id="med-2">
                        <a href="paginas/listagem.php?especialidade=Cirurgia Plástica"><img src="<?=$m["foto"]?>" alt="<?=$m["nome"]?>" class="img-mi"></a>
                        <h2><?=$m["nome"]?></h2>
                        <h3><?=$m["especialidade"]?></h3>
                        <a href="paginas/listagem.php?especialidade=Cirurgia Plástica"><h4 class="mmed">Mais Medicos da área de Cirurgia Plastica</h4></a>
                    </div>
                </div>
                <div id="posi-2">
                    <?php
                      $m=$medicos[10];
                    ?>
                    <div class="med" id="med-3">
                        <a href="paginas/listagem.php?especialidade=Nutrição"><img src="<?=$m["foto"]?>" alt="<?=$m["nome"]?>" class="img-mi"></a>
                        <h2><?=$m["nome"]?></h2>
                        <h3><?=$m["especialidade"]?></h3>
                        <a href="paginas/listagem.php?especialidade=Nutrição"><h4 class="mmed">Mais Medicos da área de Nutrição</h4></a>
                    </div>
                    <?php
                      $m=$medicos[15];
                    ?>
                    <div class="med" id="med-4">
                        <a href="paginas/listagem.php?especialidade=Ginecologia"><img src="<?=$m["foto"]?>" alt="<?=$m["nome"]?>" class="img-mi"></a>
                        <h2><?=$m["nome"]?></h2>
                        <h3><?=$m["especialidade"]?></h3>
                        <a href="paginas/listagem.php?especialidade=Ginecologia"><h4 class="mmed">Mais Medicos da área Ginecologia</h4></a>
                    </div>
                    <?php
                      $m=$medicos[21];
                    ?>
                    <div class="med" id="med-5">
                        <a href="paginas/listagem.php?especialidade=Odontologia"><img src="<?=$m["foto"]?>" alt="<?=$m["nome"]?>" class="img-mi"></a>
                        <h2><?=$m["nome"]?></h2>
                        <h3><?=$m["especialidade"]?></h3>
                        <a href="paginas/listagem.php?especialidade=Odontologia"><h4 class="mmed">Mais Medicos da área de Odontologia</h4></a>
                    </div>
                </div>
            </div>
        </section>
    
    </main>

    <footer class="rodape">
        <div id="roda-1">
            <img src="img/logo-rodape.png" class="logo-rodape">
            <div class="wrapper">

                <div id="sub-e" class="sub">
                    <h3>Especialidades</h3>
                    <p>Cardiologia</p>
                    <p>Cirurgia Plastica</p>
                    <p>Nutrição</p>
                    <p>Ginecologia</p>
                    <p>Odontologia</p>
                </div>
                <div id="sub-cidade" class="sub">
                    <h3>Estados</h3>
                    <p>Bahia</p>
                    <p>Minas Gerais</p>
                    <p>São Paulo</p>
                    <p>Pernambuco</p>
                    <p>Rio De Janeiro</p>
                </div>
                <div id="sub-empresa" class="sub">
                    <h3>Empresa</h3>
                    <p>Sobre nós</p>
                    <p>Centra de Ajuda</p>
                    <p>Status</p>
                    <p>Localidades</p>
                </div>
            </div>
            <div id="app">
                <h4>Baixe o nosso App: O Consulta+ Plus</h4>
                <a href="" title="App"><img src="img/baixe.png"></a>
            </div>
            <div class="redes-sociais">
                <a href="" title="Facebook"><img src="img/face.png" class="redes"></a>
                <a href="" title="Instagram"><img src="img/insta.png" class="redes"></a>
                <a href="" title="Whatsapp" ><img src="img/whats.png" class="redes"></a>
            </div>
        </div>
        <div id="roda-2">
            <div id="r2-1" class="r2-p">
                <p>Termos de Uso</p>
                <p>Politicas de Privacidade</p>
            </div>
            <div id="r2-2" class="r2-p">
                <p class="ui-minha-autoral">Todos os Direitos Reservados &copy; Consulta+ 2023</p>
            </div>
        </div>
    </footer>    
</body>
</html>