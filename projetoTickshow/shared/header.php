<html>
    <style>
            .container {
                padding: 80px 120px;
            }
            .modal-header, h4, .close {
                background-color: #4a1564;
                color: #fff !important;
                text-align: center;
                font-size: 30px;
            }
            .modal-header, .modal-body {
                padding: -10px 10px;
            }
            .nav-tabs li a {
                color: #777;
            }
            .navbar {
                font-family: Montserrat, sans-serif;
                margin-bottom: 0;
                background-color: #4a1564;
                border: 0;
                font-size: 14px !important;
                letter-spacing: 5px;
            }
            .navbar li a, .navbar .navbar-brand {
                color: #fff !important;
            }
            .navbar-nav li a:hover {
                color: #fff !important;
            }
            .navbar-nav li.active a {
                color: #fff !important;
                background-color: white !important;
            }
            .navbar-default .navbar-toggle {
                border-color: transparent;
            }
            .form-control {
                border-radius: 0;
            }
            .logo {
                position: relative;
                z-index: 2;
                height: 55px;
            }

            .logo img {
                width: 100px;
                position: absolute;
                top:-22px;
                left: 10px;
            }
        </style>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <div class="logo"><a href="home.php"><img src="img/logotick.png" alt=""/></a></div>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="eventos.php">Eventos</a></li>
                        <li><a href="help.php">Central de Ajuda</a></li>
                        <li><a href="index.php">Login</a></li>
                        <li><a href="cadastroEvento.php">Cadastrar Evento</a></li>
                        <li><a href="#"><span class="fa fa-cart-plus" style="font-size:28px"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</html>