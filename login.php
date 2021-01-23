<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Krodtlott - Login</title>
        <link href="css/krodtlott.css" rel="stylesheet">
        <script src="js/krodtloot.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body  class="corpo">
        <div class="container">
            <div class="inner">
                <div class="esquerda">
                    <div class="imagem"></div>
                </div>
                <div class="direita">
                    <div class="box-form">
                        <div class="bloco-det-lado login">
                            <div class="nav-da-tab dflex">
                                <div onclick="tabFix('login')" class="nav-inner">
                                    <h3 id="login">Entrar</h3>
                                </div>
                                <div onclick="tabFix('cadastro')" class="nav-inner">
                                    <h3 id="registrar">Criar conta</h3>
                                </div>
                            </div>
                            <div id="login-form" class="infos-detalhe">
                                <form action="post">
                                    <label for="email">Email</label>
                                    <input type="text" placeholder="Ex. email@email.com.br" name="email" required>
                                    <label for="senha">Senha</label>
                                    <input type="text" placeholder="Senha" name="senha" required>
                                    <button>Login</button>
                                </form>
                            </div>
                            <div id="cadastro-form" class="infos-detalhe">
                                <form action="post" action="cadastro.php">
                                    <label for="email">Email</label>
                                    <input type="text" placeholder="Ex. email@email.com.br" name="email" required>
                                    <label for="nome">Nome</label>
                                    <input type="text" placeholder="Nome" name="nome" required>
                                    <label for="senha">Senha</label>
                                    <input type="text" placeholder="Senha" name="senha" required>
                                    <button>Cadastrar</button>
                                </form>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </body>
</html>
