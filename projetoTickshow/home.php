
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
            body {
                font: 400 15px/1.8 Lato, sans-serif;
                color: #777;
            }
            h3, h4 {
                margin: 10px 0 30px 0;
                letter-spacing: 10px;
                font-size: 20px;
                color: #111;
            }
            .container {
                padding: 80px 120px;
            }
            .person {
                border: 10px solid transparent;
                margin-bottom: 25px;
                width: 50%;
                height: 40%;
                opacity: 0.9;
            }
            .person:hover {
                border-color: #f1f1f1;
            }
            .carousel-inner img {
                width: 100%;
                height: 100%;
                margin: auto;
            }
            .carousel-caption h3 {
                color: #fff !important;
            }
            @media (max-width: 600px) {
                .carousel-caption {
                    display: none;
                }
            }
            .bg-1 {
                background: #2d2d30;
                color: #bdbdbd;
            }
            .bg-1 h3 {
                color: #fff;
            }
            .bg-1 p {
                font-style: italic;
            }
            .list-group-item:first-child {
                border-top-right-radius: 0;
                border-top-left-radius: 0;
            }
            .list-group-item:last-child {
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
            .thumbnail {
                padding: 0 0 15px 0;
                border: none;
                border-radius: 0;
            }
            .thumbnail p {
                margin-top: 15px;
                color: black;
            }
            .btn {
                padding: 10px 20px;
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
            .form-control {
                border-radius: 0;
            }
            textarea {
                resize: none;
            }
            .item.active {
                overflow: hidden;
                top: 59px;
                width: 1500px;
                height: 450px;
                margin: 0 auto;
            }
            .glyphicon glyphicon-lock{
                color: #4a1564;
            }
            .nomes{
                padding: 0px 70px;
            }
            footer {
                background-color: #f2f2f2;
                padding: 25px;
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
        </style>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
        <?php
            require_once './shared/header.php';
        ?>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/eventos/anacastelahd.png" alt="anacastela" >     
                </div>

                <div class="item">
                    <img src="img/eventos/cabelinhohd2.jpeg" alt="cabelinho" >  
                </div>

                <div class="item">
                    <img src="img/eventos/maiaraemaraisahd.png" alt="maiaraemaraisa">    
                </div>            
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Container (The Band Section) -->
        <div id="band" class="container text-center">
            <h3>TickShow</h3>
            <p><em>Queremos a melhor experiência para nossos usuários!</em></p>
            <p>Tickshow é um projeto desenvolvido para venda de ingressos online, onde
                os usuários podem acessar à diversos eventos de diferentes categorias e podem
                comprar o ingresso de forma virtual. Nós buscamos trazer os eventos que estão em alta 
                e sempre atualizar as novidades para vocês! Esperamos que tenham uma boa experiência com
                o site e, caso haja alguma reclamação ou sugestão, sintam-se à vontade para entrar em 
                contato com a equipe por meio da Central de Ajuda. 
                </p>
            <br>
        </div>

        <!-- Container (TOUR Section) -->
        <div id="tour" class="bg-1" style="background-color: #4a1564;">
            <div class="container">
                <h3 class="text-center">EVENTOS DISPONÍVEIS</h3>
                <p class="text-center">Compre já seu ingresso!</p>
                <div class="row text-center">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="img/eventos/anacastela1.jpg" alt="ana">
                            <p><strong>VOTUPORANGA-SP</strong></p>
                            <p>14 de Outubro 2023</p>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Comprar</button>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="img/eventos/cabelinho2.jpeg" alt="cabelinho">
                            <p><strong>RIO DE JANEIRO-RJ</strong></p>
                            <p>26 de Janeiro 2024</p>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Comprar</button>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="img/eventos/mm.png" alt="maiaraemaraisa"/>
                            <p><strong>TUBARÃO-SC</strong></p>
                            <p>22 de Novembro 2023</p>
                            <button class="btn" data-toggle="modal" data-target="#myModal">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">x</button>
                            <h4><span class="glyphicon glyphicon-lock"></span>Ingressos</h4>
                        </div>
                        <div class="modal-body">
                            <form role="form">
                                <div class="form-group">
                                    <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span>Quantidade de Ingressos</label>
                                    <input type="number" class="form-control" id="psw" placeholder="Insira a quantidade">
                                </div>
                                <div class="form-group">
                                    <label for="usrname"><span class="glyphicon glyphicon-user"></span>Email</label>
                                    <input type="text" class="form-control" id="usrname" placeholder="Insira seu email">
                                </div>
                                <button type="submit" class="btn btn-block">Adicionar ao carrinho 
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span> Cancelar compra
                            </button>
                            <a href="#">Precisa de Ajuda?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Container (Contact Section) -->
        <div id="contact" class="container">
            <br>
            <h3 class="text-center">Sobre nós</h3>  
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Izabely</a></li>
                <li><a data-toggle="tab" href="#menu1">Laura</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h2>Izabely Brum </h2>
                    <p>Estudante do Colégio Técnico Industrial de Santa Maria.<br>
                    <i class="fa fa-instagram" style="font-size:16px"> @izabelybrum</i></p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h2>Laura Lovato</h2>
                    <p>Estudante do Colégio Técnico Industrial de Santa Maria.<br>
                    <i class="fa fa-instagram" style="font-size:16px"> @lauralovatoo</i></p>
                </div>
            </div>
        </div>
        <div id="band" class="container-text-center">
            
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-4">
                    <p class="nomes"><strong>Laura Lovato</strong></p><br>
                    <a href="#demo" data-toggle="collapse">
                        <img src="img/laura.jpeg" class="img-square person" alt="" width="215" height="215">
                    </a>
                    <div id="demo" class="collapse">
                        <p>Desenvolvedora do site</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="nomes"><strong>Izabely Brum</strong></p><br>
                    <a href="#demo1" data-toggle="collapse">
                        <img src="img/iza.jpeg" class="img-square person" alt="" width="215" height="215">
                    </a>
                    <div id="demo1" class="collapse">
                        <p>Desenvolvedora do site</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <!-- Footer -->
        <footer class="text-center" style="background-color: #4a1564;">
            <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a><br><br>
            <p>Voltar ao topo</p> 
        </footer>
    </body>
</html>
