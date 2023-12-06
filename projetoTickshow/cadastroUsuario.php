<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar usuário</title>

        <link href="css/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_css_bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/ajax.googleapis.com_ajax_libs_jquery_3.6.4_jquery.min.js" type="text/javascript"></script>
        <script src="js/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_js_bootstrap.min.js" type="text/javascript"></script>
        
        <link rel="stylesheet" type="text/css" href="estiloLoginCadastro.css">
    </head>
    <body>
        <!--<div class="col-md-12" style="padding:0px">
            <img src="" style="width:10%">
        </div>-->

        <br><br><br><br>

        <div class="row">
            <div class="col-md-4"> </div>

            <div class="col-md-4">

                <div class="blocoLogin">
                    <form method="post" action="./controller/usrController.php" class="formLogin">


                        <h1>Cadastrar-se</h1>
                        <p>Preencha os campos abaixo com seus dados</p>
                        
                        <input type="hidden" name="id" value="<?php echo @(isset($usrObject) ? $usrObject->getId() : '') ?>">
                        
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome"  name="nome" required="" placeholder="Insira seu nome">
                        
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required="" placeholder="Insira seu email">
                        
                        <label for="telefone">Telefone:</label>
                        <input type="text" id="telefone" name="telefone" required="" placeholder="Insira seu número de telefone">
                        
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha" required="" placeholder="Crie uma senha">

                        <input type="submit" name= "cadastrar" class="btn" value="Salvar informações">
                    </form>
                </div>

            </div>

            <div class="col-md-4"></div>


    </body>
</html>
