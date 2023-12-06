<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar evento</title>

        <link href="css/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_css_bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/ajax.googleapis.com_ajax_libs_jquery_3.6.4_jquery.min.js" type="text/javascript"></script>
        <script src="js/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_js_bootstrap.min.js" type="text/javascript"></script>
        
        <link rel="stylesheet" type="text/css" href="estiloLoginCadastro.css">
    </head>
    <body>
        <!--<div class="col-md-12" style="padding:0px">
            <img src="img/Ticket.png" style="width:10%">
        </div>-->

        <br><br><br>

        <div class="row">
            <div class="col-md-4"> </div>

            <div class="col-md-4">

                <div class="blocoLogin">
                    <form method="post" action="./controller/eventosController.php" class="formLogin">

                        <h1>Cadastrar Evento</h1>
                        <p>Preencha os campos abaixo com os dados do evento.</p>
                        
                        <input type="hidden" name="id" vvalue="<?php echo @(isset($eventosObject) ? $eventosObject->getId() : '') ?>">

                        <label for="nome">Nome do evento:</label>
                        <input type="text" id="nome" name="nome" required="" placeholder="Insira o nome">
                       
                        <label for="valor">Valor do ingresso:</label>
                        <input type="number" name="valor" required="" placeholder="Insira um valor">
                        
                        <label for="quant_ing">Quantidade de ingressos:</label>
                        <input type="number" name="quant_ing" required="" placeholder="Insira uma quantidade">

                        <label for="url">URL da imagem escolhida:</label>
                        <input type="text" name="img" required="" placeholder="Insira um URL">
                        

                        <input type="submit" class="btn" name="cadastroEvento" value="Salvar informações">
                    </form>
                </div>

            </div>

            <div class="col-md-4"></div>


    </body>
</html>
