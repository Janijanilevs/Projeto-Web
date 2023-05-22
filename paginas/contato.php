<!--<?php
    include "php/logic.php";
    ?>-->
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Consulta+ | Homepage</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../estilos/estilo.css" rel="stylesheet">
    </head>
    <body>
        <header id="topo">
            <h1 class="logo-site">Consulta+</h1>
            <div class="botao">
               <a href="" class="botao-cadastro-login">Entrar/Cadastrar<a>
            </div>
            <nav id="menu">
                <ul>
                    <li> <a href="" title="perguntas">Pergunte aos profissionais</a></li>
                    <li><a href="" title="contato">Contato</a></li>
                    <li><a href="" title="ajuda">Ajuda</a></li>
                </ul>
            </nav>
        </header>
    
        <main>
        <main name="cntt" id="form">
            <h2 id="titulo"> Entre em contato conosco</h2>
        <form method="post" action="recebimento.php" id="contato">
                <h1>Agende seu Atendimento</h1>
                <label> Nome: 
                    <input type="text" name="nome" placeholder="Digite seu nome completo">
                </label>
                <br>
                <br>
                <label>Email:
                    <input type="e-mail" name="email" placeholder="Digite seu e-mail:">
                </label>
                <br>
                <br>
                <label>Telefone:
                    <input type="tel" name="telefone" placeholder="Digite seu número de telefone:">
                </label>
                <br>
                <br>
                <label for="textoareas">Mande sua dúvida:</label><br>
                        <textarea id="textoareas" name="comentario" placeholder="Escreva uma mensagem para nós:"></textarea>
                <br>
                <br>
                <fieldset id="sexo">Sexo:
                            <input type="radio" name="opcao" value="Masculino" id="sexoM" checked>
                            <label for="SexoM">Masculino</label>
                            <input type="radio" name="opcao" value="Feminino" id="SexoF">
                            <label for="sexoF">Feminino</label>
                    <br>
                    <br>
                </fieldset>
                     <label>Idade:
                            <input type="number" name="idade" min="1" max="100" step="1">
                    </label>
                <br>
                <br>
                    <label> Escolha um horário:
                        <input type="datetime-local" name="marcar">
                    </label>
            <br>
            <br>
                <fieldset id="procedimento">Escolha a área desejada:
                    <input type="checkbox" name="area" value="cardiologia" id=""checked>
                        <label for="ort">Cardiologia</label>
                    <input type="checkbox" name="area" value="cirurgia plástica" id="" checked>
                        <label for="end">Cirurgia Plástica</label>
                    <input type="checkbox" name="area" value="odontologia" id="">
                        <label for="impla">Odontologia</label>
                    <input type="checkbox" name="area" value="nutricao" id="">
                        <label for="ciroral">Nutrição</label>
                    <br>
                    <br>
                    <button>
                    Enviar
                    </button>
            </fieldset>
               </form>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5238.366521746993!2d-41.67079110681922!3d-14.190200273592787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7444945747073df%3A0x92eb6e102614e91c!2sIFBA%20Campus%20Brumado!5e0!3m2!1spt-BR!2sbr!4v1684762980002!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             <div id="top"><!--Logo da clínica-->
                <a href="index.html"><img src="imagens/logo/logo.png.png"></a>
            </div>
        </main>
        </main>
    
        <footer>
    
        </footer>    
    </body>
    </html>