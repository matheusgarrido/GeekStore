<?php
require '_php/pagina.php';
$pagina = new Pagina('Catálogo');
$pagina->htmlCabecalho();
?>
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Catálogo</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <?php
                    $produtos = $pagina->sqlSelect("select p.idProduto, p.nome, t.nome as tipo, p.preco from produto p left join tipo t on t.idTipo=p.tipo");
                    foreach ($produtos as $roupa){
                        $roupa['nome'] = utf8_encode($roupa['nome']);
                        ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-shop-product">
                                    <div class="product-upper">
                                        <?php
                                            $frente = "frente";
                                            if($roupa['tipo']=="Camiseta Dupla Face") $frente = $frente."1";
                                            $urlImg = SITE."_imagem/_produto/{$roupa['tipo']}/{$roupa['nome']}/{$frente}.jpg";
//                                            echo $urlImg;
                                        ?>
                                        <img src="<?php echo $urlImg;?>" alt="Foto indisponível de <?php echo $roupa['tipo'];?>">
                                    </div>
                                    <h2>
                                        <a href="<?php echo SITE."produto.php?produto={$roupa['id']}"; ?>">
                                            <?php echo ($roupa['nome']); ?>
                                        </a>
                                    </h2>
                                    <div class="product-carousel-price">
                                        <ins>R$ <?php echo $roupa['preco']?></ins>
                                        <!--<del>$999.00</del>-->
                                    </div>  
                                    <div class="product-option-shop">
                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                                    </div>                       
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
            
<!--            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>-->
        </div>
    </div>


<?php
$pagina->htmlFooter();
?>