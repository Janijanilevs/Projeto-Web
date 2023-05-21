<?php
    include "dados/medicos.php";

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
            <a href="" class="botao-cadastro-login">Entrar/Cadastrar<a>
        </div>
        <nav id="menu">
            <ul>
                <li><a href="" title="perguntas">Pergunte aos profissionais</a></li>
                <li><a href="" title="contato">Contato</a></li>
                <li><a href="" title="ajuda">Ajuda</a></li>
            </ul>
        </nav>
    </header>
  
    <main>
        <section id="banner">
            <h2 class="titulo">O QUE VOCÊ GOSTARIA DE AGENDAR?</h2>
            <h3 class="sub">AGENDE SUAS CONSULTAS E TELECONSULTAS RÁPIDO E FÁCIL.</h3>
                <form action="" method="get" id="form1">
                    <button><img src="img/busca.png"></button>
                    <select class="area" name="agendamento">
                        <option disabled selected value="">Qual especialidade você procura?</option>
                        <option value="1">Cirurgia Plastica</option>
                        <option value="2">Odontologia</option>
                        <option value="3">Nutrição</option>
                        <option value="4">Ginecologia</option>
                        <option value="5">Cardiologia</option>
                    </select>
                </form>
                <img src="img/medicos.png" alt="médicos do Consulta+">
        </section>

        <section id="detalhes-empresa">
            <h2 class="titdet">Quais são os benefícios da Consulta+?</h2>
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
            <a href="" class="botaozinho"><div class="botao-saibamais">
                 <h4>Saiba mais sobre nós</h4>
            </div><a>
        </section>

        <section id="extra">
            <div id="container-extra">
                <div class="item-extra" id="item-1">
                    <h2 class="text-ex">Voçê sabia?</h2>
                     <h4 class="text-ex">O Consulta+ possui planos a partir de apenas <br>R$109,90.</h4>
                </div>
                <div class="item-extra" id="item-2">
                    <h3 class="text-ex">Aceitamos diversos convênios: UNIMED, BRADESCO SAÚDE, ONE HEALTH e muito mais!</h3>
                </div>
                <div class="item-extra" id="item-3">
                    <h3 class="text-ex">Quer tirar uma duvida com nossos medicos?</h3>
                    <br>
                    <h3 id="perg">FAÇA SUA PERGUNTA</h3>
                </div>
            </div>
        </section>

        <section id="principais-medicos">
            <div class="prin-medicos">
                <div id="posi-1">
                    <div class="med" id="med-1">
                        <img src="" alt="nome">
                        <h2>Nome</h2>
                        <h3>Especialidade</h3>
                        <a href=""><h4>Mais Medicos dessa area</h4></a>
                    </div>
                    <div class="med" id="med-2">
                        <img src="" alt="nome">
                        <h2>Nome</h2>
                        <h3>Especialidade</h3>
                        <a href=""><h4>Mais Medicos dessa area</h4></a>
                    </div>
                </div>
                <div id="posi-2">
                    <div class="med" id="med-3">
                        <img src="" alt="nome">
                        <h2>Nome</h2>
                        <h3>Especialidade</h3>
                        <a href=""><h4>Mais Medicos dessa area</h4></a>
                    </div>
                    <div class="med" id="med-4">
                        <img src="" alt="nome">
                        <h2>Nome</h2>
                        <h3>Especialidade</h3>
                        <a href=""><h4>Mais Medicos dessa area</h4></a>
                    </div>
                    <div class="med" id="med-5">
                        <img src="" alt="nome">
                        <h2>Nome</h2>
                        <h3>Especialidade</h3>
                        <a href=""><h4>Mais Medicos dessa area</h4></a>
                    </div>
                </div>
            </div>
        </section>
    
    </main>
    
    <footer>
    
    </footer>    
</body>
</html>