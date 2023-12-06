<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Carrinho</title>
        <link href="css/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_css_bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/ajax.googleapis.com_ajax_libs_jquery_3.6.4_jquery.min.js" type="text/javascript"></script>
        <script src="js/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_js_bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script>
            $(document).ready(function () {
                $('#myTable').DataTable();
            });
        </script>


    </head>
    <body>

        <div class="row">
            <div class="col-md-12">


                <table id="myTable" class="display">
                    <thead>
                        <tr>

                            <th>Lista de Ingressos</th>
                            <th>Valor Ingressos</th>
                            <th>Retirar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        session_start();
                        /* foreach ($_SESSION['carrinho'] as $mostrar) {
                          echo($mostrar);
                          } */

                        if (!empty($_SESSION['carrinho']) && $_SESSION['carrinho'] != null) {

                            var_dump($_COOKIE['carrinho']);
                            var_dump($_SESSION['carrinho']);

                            $whereIn = implode(',', $_SESSION['carrinho']);
                            require_once './model/eventosModel.php';
                            $eventos = new eventosModel();
                            $resultList = $eventos->loadWhereIn($whereIn);
                            $valor_total = 0;
                            $lista_eventos = "";
                            //if(!empty($_SESSION['carrinho'])){

                            foreach ($resultList as $values) {
                                //foreach($_SESSION['carrinho'] as $ids){ //para poder exibir itens repetidos
                                foreach ($_SESSION['carrinho'] as $ids) { //para poder exibir itens repetidos
                                    if ($ids == $values['id']) {
                                        echo('<tr>'
                                        . '<td>' . $values['nome'] . '</td>'
                                        . '<td>R$' . $values['img'] . '</td>'
                                        . '<td>R$' . $values['valor'] . '</td>'
                                        . '<td><a href="controller/carrinhoController.php?delete=' . $values['id'] . '">Retirar</a></td>'
                                        . '</tr>');

                                        $valor_total = $valor_total + $values['valor'];
                                        $lista_eventos = $lista_eventos . "," . $values['nome'];
                                    }
                                }
                            }

                            echo('</tbody>');
                            echo(' </table>');
                            echo('</div></div>');

                            echo('<div class="row">');
                            echo('<div class="col-md-3">');
                            echo('<p>Valor total da compra = ' . $valor_total . '</p>');
                            echo('<p>Lista produtos = ' . $lista_eventos . '</p>');
                            echo('<form method="post" action="carrinho.php">'
                            . '<div class="mb-3 mt-3">'
                            . '<select class="form-select">'
                            . '<option 1>BATATINHA</option 1>'
                            . '</select>'
                            . '</div>'
                            . '<div class="mb-3 mt-3">'
                            . '<label for="frete" class="form-label">Insira seu CEP</label>'
                            . '<input type="text" class="form-control" id="frete" name="frete"'
                            . 'maxlength="8" minlength="8">'
                            . '<a href="https://buscacepinter.correios.com.br/app/endereco/index.php?t">Não sabe o CEP?</a>'
                            . '</div>'
                            . '</form>');
                            echo('</div>');
                            echo('<div class="col-md-6">');
                            echo('</div>');
                            if ($_POST) {
                                require_once './model/comprasModel.php';
                                $compra = new comprasModel();
                                $compra->setData(time());
                                $compra->setLista_produtos($lista_eventos);
                                $compra->setValor_total($valor_total);
                                $compra->setUsuarios_id($_SESSION['id']);
                                $compra->setEventos_id($_POST['eventos_id']);
                                //$compra->insert();
                            }
                        }
                        ?>
                        </div>
                        </div>
                        </body>
                        </html>