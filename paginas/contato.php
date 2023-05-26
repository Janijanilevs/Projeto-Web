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
            <a href="../index.php" class="logo-site">Consulta+</a>
            <div class="botao">
               <a href="" class="botao-cadastro-login">Entrar/Cadastrar<a>
            </div>
                <nav id="menu">
                    <ul>
                        <li> <a href="../../Projeto-Web/paginas/pergunta.php">Pergunte aos profissionais</a></li>
                        <li><a href="">Contato</a></li>
                        <li><a href="../../Projeto-Web/paginas/ajuda.php">Ajuda</a></li>
                    </ul>
                </nav>
            </header>
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
                            <textarea id="textareas" name="comentario" placeholder="Escreva uma mensagem para nós:"></textarea>
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
                        <input type="checkbox" name="area" value="cardiologia" id="">
                            <label for="ort">Cardiologia</label>
                        <input type="checkbox" name="area" value="cirurgia plástica" id="">
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
                <footer id="rodape">
        <div id="roda-1">
            <img src="../img/logo-rodape.png" class="logo-rodape">
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
                <a href="" title="App"><img src="../img/baixe.png"></a>
            </div>
            <div class="redes-sociais">
                <a href="" title="Facebook"><img src="../img/face.png" class="redes"></a>
                <a href="" title="Instagram"><img src="../img/insta.png" class="redes"></a>
                <a href="" title="Whatsapp" ><img src="../img/whats.png" class="redes"></a>
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