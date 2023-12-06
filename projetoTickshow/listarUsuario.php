<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de usuários</title>
        
         <link href="css/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_css_bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/ajax.googleapis.com_ajax_libs_jquery_3.6.4_jquery.min.js" type="text/javascript"></script>
        <script src="js/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_js_bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body >
        <div class="col-md-12" style="padding:0px">
            <a href="home.php"><img src="img/logotick.png" style="width:5%"></a>
        </div>
        
        <main class="container">
            <br>
        <h2>Contas cadastradas:</h2>
        
        <!--cabeça da tabela-->
        <table class="table">
        <thead>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Telefone</th>
        </thead>
        
        <!--corpo da tabela-->
        <tbody>
            <?php
            require_once './controller/usrController.php';
            $usrList = loadAll();
            foreach ($usrList as $usr) {
                echo '<tr>';
                    
                    echo '<td>';
                        echo $usr['nome'];
                    echo '</td>';
                
                    echo '<td>';
                        echo $usr['email'];
                    echo '</td>';
                    
                    echo '<td>';
                        echo $usr['senha'];
                    echo '</td>';
                    
                    echo '<td>';
                        echo $usr['telefone'];
                    echo '</td>';

                echo '</tr>';
            }

            $usr = loadById(10);
            echo $usr->getNome();
            echo $usr->getEmail();
            echo $usr->getSenha();
            echo $usr->getTelefone();
            ?>
        </tbody>
    </table>
    <script>
        $(document).ready(function () {
        $('#usrTable').DataTable({

        });
    </script>
        </main>
    </body>
</html>
