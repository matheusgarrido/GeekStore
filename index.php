<?php
require '_php/pagina.php';
$pagina = new Pagina(null);
$pagina->htmlCabecalho();
//$pagina->htmlCarrosselProdutos();
$pagina->htmlCardsServicos();        
?>
    
<!--<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <\div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>
                    <div class="product-carousel">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-1.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                </div>
                            </div>

                            <h2><a href="single-product.html">Samsung Galaxy s5- 2015</a></h2>

                            <div class="product-carousel-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div> 
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-2.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                </div>
                            </div>

                            <h2>Nokia Lumia 1320</h2>
                            <div class="product-carousel-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div> 
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-3.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                </div>
                            </div>

                            <h2>LG Leon 2015</h2>

                            <div class="product-carousel-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                                 
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-4.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                </div>
                            </div>

                            <h2><a href="single-product.html">Sony microsoft</a></h2>

                            <div class="product-carousel-price">
                                <ins>$200.00</ins> <del>$225.00</del>
                            </div>                            
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-5.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                </div>
                            </div>

                            <h2>iPhone 6</h2>

                            <div class="product-carousel-price">
                                <ins>$1200.00</ins> <del>$1355.00</del>
                            </div>                                 
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/product-6.jpg" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                </div>
                            </div>

                            <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>

                            <div class="product-carousel-price">
                                <ins>$400.00</ins>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
<!--</div>  End main content area -->
<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <div class="brand-list">
                        <?php 
                        $marcas = $pagina->sqlSelect("select * from marca");
                            foreach ($marcas as $m){
                                ?>
                                <a href="<?php echo SITE."catalogo.php?marca=".$m['idMarca']; ?>">
                                    <img src="<?php echo SITE."_imagem/_marca/".utf8_encode($m['nome']).".png"; ?>">
                                </a>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End brands area -->

<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Camisetas</h2>
                    <a href="<?php echo SITE."catalogo.php?produto=1"?>" class="wid-view-more">Ver tudo</a>
                    <?php
                    $camisetas = $pagina->sqlSelect("select p.idProduto as id, p.nome, t.nome as tipo, p.preco from produto p left join tipo t on t.idTipo=p.tipo where p.tipo=1 limit 2");
                    foreach ($camisetas as $roupa){
                        $tipo = utf8_encode($roupa['tipo']);
                        $nome = utf8_encode($roupa['nome']);
                        $frente = "frente";
                        if($roupa['tipo']=="Camiseta Dupla Face") $frente = $frente." 1";
                        $urlImg = SITE."_imagem/_produto/{$tipo}/{$nome}/{$frente}.jpg";
                        ?>
                        <div class="single-wid-product">
                            <a href="<?php echo SITE."produto.php?id={$roupa['id']}"?>">
                                <img src="<?php echo $urlImg; ?>" alt="" class="product-thumb" style="height: 150px">
                            </a>
                    <h2><a href="<?php echo SITE."produto.php?id={$roupa['id']}"?>"><?php echo utf8_encode($roupa['nome']); ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>R$ <?php echo $roupa['preco']; ?></ins>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Jaquetas Bomber</h2>
                    <a href="<?php echo SITE."catalogo.php?produto=1"?>" class="wid-view-more">Ver tudo</a>
                    <?php
                    $jaquetas = $pagina->sqlSelect("select p.idProduto as id, p.nome, t.nome as tipo, p.preco from produto p left join tipo t on t.idTipo=p.tipo where p.tipo = 5 limit 2");
                    foreach ($jaquetas as $roupa){
                        $tipo = utf8_encode($roupa['tipo']);
                        $nome = utf8_encode($roupa['nome']);
                        $frente = "frente";
                        if($roupa['tipo']=="Camiseta Dupla Face") $frente = $frente." 1";
                        $urlImg = SITE."_imagem/_produto/{$tipo}/{$nome}/{$frente}.jpg";
                        ?>
                        <div class="single-wid-product">
                            <a href="<?php echo SITE."produto.php?id={$roupa['id']}"?>">
                                <img src="<?php echo $urlImg; ?>" alt="" class="product-thumb" style="height: 150px">
                            </a>
                    <h2><a href="<?php echo SITE."produto.php?id={$roupa['id']}"?>"><?php echo utf8_encode($roupa['nome']); ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>R$ <?php echo $roupa['preco']; ?></ins>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Baby Look</h2>
                    <a href="<?php echo SITE."catalogo.php?produto=4"?>" class="wid-view-more">Ver tudo</a>
                    <?php
                    $babylook = $pagina->sqlSelect("select p.idProduto as id, p.nome, t.nome as tipo, p.preco from produto p left join tipo t on t.idTipo=p.tipo where p.tipo = 4 limit 2");
                    foreach ($babylook as $roupa){
                        $tipo = utf8_encode($roupa['tipo']);
                        $nome = utf8_encode($roupa['nome']);
                        $frente = "frente";
                        if($roupa['tipo']=="Camiseta Dupla Face") $frente = $frente." 1";
                        $urlImg = SITE."_imagem/_produto/{$tipo}/{$nome}/{$frente}.jpg";
                        ?>
                        <div class="single-wid-product">
                            <a href="<?php echo SITE."produto.php?id={$roupa['id']}"?>">
                                <img src="<?php echo $urlImg; ?>" alt="" class="product-thumb" style="height: 150px">
                            </a>
                    <h2><a href="<?php echo SITE."produto.php?id={$roupa['id']}"?>"><?php echo utf8_encode($roupa['nome']); ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>R$ <?php echo $roupa['preco']; ?></ins>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End product widget area -->

<?php 
$pagina->htmlFooter();
?>