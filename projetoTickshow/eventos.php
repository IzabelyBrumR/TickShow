
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tickshow!</title>

        <link href="css/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_css_bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/ajax.googleapis.com_ajax_libs_jquery_3.6.4_jquery.min.js" type="text/javascript"></script>
        <script src="js/maxcdn.bootstrapcdn.com_bootstrap_3.4.1_js_bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            footer {
                background-color: #f2f2f2;
                padding: 25px;
            }
            .btn {
                padding: 10px 36px;
                background-color: #333;
                color: white;
                border-radius: 0;
                transition: .1s;
            }
            .btn:hover, .btn:focus {
                border: 1px solid #333;
                background-color: #fff;
                color: #000;
            }
            footer {
                background-color: #2d2d30;
                color: #f5f5f5;
                padding: 32px;
            }
            footer a {
                color: #f5f5f5;
            }
            footer a:hover {
                color: #777;
                text-decoration: none;
            }
            .cor{
                background-color: #fff;
            }
        </style>
    </head>
    <body>
        <?php
        require_once './shared/header.php';
        ?>

        <main class="container">
        <div>        
        <?php
                require_once 'controller/eventosController.php';
                $result = loadByCat(1);

                echo('<h3>Stand Up`s:</h3>');
                echo('<div class="row">');

                foreach($result as $data){
                    echo ('<div class="col-sm-3">');
                    echo ('<div class="panel" style="background-color: #ac58aa;">');
                    echo ('<div class="panel-heading" class="cor">'.$data['nome'].'</div>');
                    echo ('<div class="panel-body"style="background-color: #fff;"><img src="'.$data['img'].'" style="height:90px"></div>');
                    echo ('<div class="panel-footer" style="background-color: #ac58aa;"></div>');
                    echo('<button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>');
                    echo('</div></div>');
                }
                echo('</div>');
                echo('<br>');

                $result = loadByCat(2);

                echo('<h3>Shows:</h3>');
                echo('<div class="row">');

                foreach($result as $data){
                    echo ('<div class="col-sm-3">');
                    echo ('<div class="panel" style="background-color: #ac58aa;">');
                    echo ('<div class="panel-heading" class="cor">'.$data['nome'].'</div>');
                    echo ('<div class="panel-body"style="background-color: #fff;"><img src="'.$data['img'].'" style="height:90px"></div>');
                    echo ('<div class="panel-footer" style="background-color: #ac58aa;"></div>');
                    echo('<button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>');
                    echo('</div></div>');
                }
                echo('</div>');
                echo('<br>');

                $result = loadByCat(3);

                echo('<h3>Para crianças:</h3>');
                echo('<div class="row">');

                foreach($result as $data){
                    echo ('<div class="col-sm-3">');
                    echo ('<div class="panel" style="background-color: #ac58aa;">');
                    echo ('<div class="panel-heading" class="cor">'.$data['nome'].'</div>');
                    echo ('<div class="panel-body"style="background-color: #fff;"><img src="'.$data['img'].'" style="height:90px"  alt="Image"></div>');
                    echo ('<div class="panel-footer" style="background-color: #ac58aa;"></div>');
                    echo('<button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>');
                    echo('</div></div>');
                }
                echo('</div>');
                echo('<br>');

                $result = loadByCat(4);

                echo('<h3>Teatros:</h3>');
                echo('<div class="row">');

                foreach($result as $data){
                    echo ('<div class="col-sm-3">');
                    echo ('<div class="panel" style="background-color: #ac58aa;">');
                    echo ('<div class="panel-heading" class="cor">'.$data['nome'].'</div>');
                    echo ('<div class="panel-body"style="background-color: #fff;"><img src="'.$data['img'].'" style="height:90px"  alt="Image"></div>');
                    echo ('<div class="panel-footer" style="background-color: #ac58aa;"></div>');
                    echo('<button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>');
                    echo('</div></div>');
                }
                echo('</div>');
                echo('<br>');

                $result = loadByCat(5);

                echo('<h3>Festas:</h3>');
                echo('<div class="row">');

                foreach($result as $data){
                    echo ('<div class="col-sm-3">');
                    echo ('<div class="panel" style="background-color: #ac58aa;">');
                    echo ('<div class="panel-heading" class="cor">'.$data['nome'].'</div>');
                    echo ('<div class="panel-body"style="background-color: #fff;"><img src="'.$data['img'].'" style="height:90px"  alt="Image"></div>');
                    echo ('<div class="panel-footer" style="background-color: #ac58aa;"></div>');
                    echo('<button class="btn" data-toggle="modal" data-target="#myModal">Adicionar ao Carrinho</button>');
                    echo('</div></div>');
                }
                echo('</div>');
                echo('<br>');
                ?>
            </div>
            <br>
        </main>
        <footer class="text-center" style="background-color: #4a1564;">
            <a class="up-arrow" href="eventos.php" data-toggle="tooltip" title="TO TOP">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a><br><br>
            <p>Voltar ao topo</p> 
        </footer>

    </body>
</html>

