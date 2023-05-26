<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../estilos/estilo.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header id="topo">
        <a href="../index.php" class="logo-site">Consulta+</a>
        <div class="botao">
            <a href="" class="botao-cadastro-login">Entrar/Cadastrar<a>
        </div>
        <nav id="menu">
            <ul>
                <li><a href="">Pergunte aos profissionais</a></li>
                <li><a href="../../Projeto-Web/paginas/contato.php">Contato</a></li>
                <li><a href="../../Projeto-Web/paginas/ajuda.php">Ajuda</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <article class="conteudo">
           
            <form method="post" action="">
                <fieldset>
                    <legend>Realize Sua Dúvida</legend>
                    
                    <div class="campo">
                        <label>Nome</label>
                        <input type="text" name="nome">
                    
                    </div>
                    <div class="campo">
                        <label>E-mail</label>
                        <input type="email" name="email">
                    
                    </div>
                    <div class="campo">
                        <label>Mande sua Dúvida</label>
                        <textarea name="mensagem"></textarea>
                    
                    </div>
                    <div class="campo">
                        <button type="submit">Enviar</button>
                    </div>
        
                    </fieldset>
           
            </form>
 
       </article>

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
</html>