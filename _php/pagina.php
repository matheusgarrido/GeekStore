<?php

define("USER", "root");
define("PASS", "");
define("BANCO", "geekstore");
define("SITE", "http://localhost/geekstore/");

class Pagina{
    function __construct($titulo){
        $this->htmlHead($titulo);
    }
    
    function htmlHead($subtitulo){
        $titulo="Geek Store";
        if($subtitulo!=null){
            $titulo=$titulo." - ".$subtitulo;
        }    
        ?>
        <!DOCTYPE html>
        <html lang="pt-br">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title><?php echo $titulo; ?></title>

                <!-- Google Fonts -->
                <link rel="shortcut icon" href="_imagem/_logo/geekstore.png" >
                <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

                <!-- Bootstrap -->
                <link rel="stylesheet" href="css/bootstrap.min.css">

                <!-- Font Awesome -->
                <link rel="stylesheet" href="css/font-awesome.min.css">

                <!-- Custom CSS -->
                <link rel="stylesheet" href="css/owl.carousel.css">
                <link rel="stylesheet" href="style.css">
                <link rel="stylesheet" href="css/responsive.css">

                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
            </head>
            <body>
        <?php
    }
    
    function htmlCarrosselProdutos(){
        ?>
        <div class="slider-area">
            <div class="block-slider block-slider4">
                <ul class="" id="bxslider-home4">
                    <li><img src="img/h4-slide.png" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                Camiseta de <br> <span class="primary"> Harry Potter <br> da <strong> Grifinória <br></strong></span> Dupla Face
                            </h2>
                            <!--<h4 class="caption subtitle"></h4>-->
                            <a class="caption button-radius" href="#"><span class="icon"></span>Detalhes do produto</a>
                        </div>
                    </li>
                    <li><img src="img/h4-slide2.png" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                Jaqueta <span class="primary"> Bomber <br> <strong> Frank Castle </strong></span>
                            </h2>
                            <!--<h4 class="caption subtitle">school supplies & backpacks.*</h4>-->
                            <a class="caption button-radius" href="#"><span class="icon"></span>Detalhes do produto</a>
                        </div>
                    </li>
                    <li><img src="img/h4-slide3.png" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                    Par de meias de <br> <span class="primary"><strong> Avengers </strong> da Marvel</span>
                            </h2>
                            <!--<h4 class="caption subtitle">Select Item</h4>-->
                            <a class="caption button-radius" href="#"><span class="icon"></span>Detalhes do produto</a>
                        </div>
                    </li>
                    <li><img src="img/h4-slide4.png" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                Camisa <span class="primary"> uniforme da <br><strong> Capitã Marvel</strong><br> </span> com manga
                            </h2>
                            <!--<h4 class="caption subtitle">& Phone</h4>-->
                            <a class="caption button-radius" href="#"><span class="icon"></span>Detalhes do produto</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <?php
    }
    
    function htmlCardsServicos(){
        ?>
        <div class="promo-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-promo promo1">
                            <i class="fa fa-refresh"></i>
                            <p>30 dias para troca</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-promo promo2">
                            <i class="fa fa-truck"></i>
                            <p>Frete grátis</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-promo promo3">
                            <i class="fa fa-lock"></i>
                            <p>Pagamentos seguros</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-promo promo4">
                            <i class="fa fa-gift"></i>
                            <p>Produtos exclusivo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    
    function htmlCabecalho(){
        ?>
        <body>
            <div class="site-branding-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="logo">
                                <h1><a href="index.php"><img src="_imagem/_logo/geekstore.png" width="150"></a></h1>
                            </div>
                        </div>

        <!--                <div class="col-sm-6">
                            <div class="shopping-item">
                                <a href="cart.html">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div> <!-- End site branding area -->

            <div class="mainmenu-area">
                <div class="container">
                    <div class="row">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div> 
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Início</a></li>
                                <li><a href="shop.html">Produtos</a></li>
                                <li><a href="single-product.html">Marcas</a></li>
        <!--                        <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="#">Category</a></li>
                                <li><a href="#">Others</a></li>-->
                                <li><a href="#">Contato</a></li>
                            </ul>
                        </div>  
                    </div>
                </div>
            </div> <!-- End mainmenu area -->
        <?php
    }
    
    function htmlFooter(){
        ?>
            <div class="footer-top-area">
                <div class="zigzag-bottom"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-about-us">
                                <h2><span>Geek</span>Store</h2>
                                <p>Geek Store é a menor loja de todo o Brasil, com diversas roupas exclusivas de diversos filmes, jogos, séries, desenhos e animes.</p>
                                <div class="footer-social">
                                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.youtube.com/?hl=pt&gl=BR" target="_blank"><i class="fa fa-youtube"></i></a>
                                    <a href="https://br.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="footer-menu">
                                <h2 class="footer-wid-title">Menu de Navegação</h2>
                                <ul>
                                    <li><a href="<?php echo SITE; ?>">Página principal</a></li>
                                    <li><a href="<?php echo SITE."catalogo.php"; ?>">Produtos</a></li>
                                    <li><a href="<?php echo SITE."marcas.php"; ?>">Marcas</a></li>
                                    <li><a href="<?php echo SITE."contato.php"; ?>">Contato</a></li>
                                </ul>                        
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="footer-menu">
                                <h2 class="footer-wid-title">Marcas</h2>
                                <ul>
                                    <li><a href="<?php echo SITE."catalogo.php?marca=Marvel"; ?>">Marvel</a></li>
                                    <li><a href="<?php echo SITE."catalogo.php?marca=DC"; ?>">DC</a></li>
                                    <li><a href="<?php echo SITE."catalogo.php?marca=Star%20Wars"; ?>">Star Wars</a></li>
                                    <li><a href="<?php echo SITE."marcas.php"; ?>">Outras marcas</a></li>
                                </ul>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End footer top area -->

            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="copyright">
                                <p>&copy; 2019 Garlipe. Todos direitos reservados.
                                    <!--<a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a>-->
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="footer-card-icon">
                                <i class="fa fa-cc-discover"></i>
                                <i class="fa fa-cc-mastercard"></i>
                                <i class="fa fa-cc-paypal"></i>
                                <i class="fa fa-cc-visa"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End footer bottom area -->

            <!-- Latest jQuery form server -->
            <script src="https://code.jquery.com/jquery.min.js"></script>

            <!-- Bootstrap JS form CDN -->
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

            <!-- jQuery sticky menu -->
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/jquery.sticky.js"></script>

            <!-- jQuery easing -->
            <script src="js/jquery.easing.1.3.min.js"></script>

            <!-- Main Script -->
            <script src="js/main.js"></script>

            <!-- Slider -->
            <script type="text/javascript" src="js/bxslider.min.js"></script>
            <script type="text/javascript" src="js/script.slider.js"></script>
        </body>
    </html>
        <?php
    }
    
    function sqlSelect($selectQuery){
        $connect = mysqli_connect(HOST, USER, PASS, BANCO) or die('Não foi possível conectar no banco.');
        $result = mysqli_query($connect, $selectQuery);
        $vetor = array();
    //    echo $selectQuery."<br>";
        //Gerando array da Área
    //    var_dump($result);
        if (mysqli_num_rows($result)>0){
            while ($row = mysqli_fetch_assoc($result)){
    //            var_dump($row);
                $vetor[]=$row;
    //            var_dump($vetor);
            }
        }
    //    print_r($vetor);
    //    var_dump($vetor);
        mysqli_close($connect);
    //    var_dump($vetor);
        return $vetor;
    }
    
    function nomeLink($nome){
        $nomeLink = $nome;
        return $nomeLink;
    }
}
?>
