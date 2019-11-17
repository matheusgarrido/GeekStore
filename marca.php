<?php
require '_php/pagina.php';
$pagina = new Pagina('Marcas');
$pagina->htmlCabecalho();
?>
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Marcas</h2>
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
                $marcas = $pagina->sqlSelect("select idMarca as id, nome from marca");
                foreach ($marcas as $m){
                    $m['nome'] = utf8_encode($m['nome']);
                    $m['descricao'] = utf8_encode($m['descricao']);
                    ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="single-shop-product">
                                <a href="<?php echo SITE."catalogo.php?marca={$m['id']}"; ?>">

                                    <div class="product-upper">
                                        <?php
                                            $urlImg = SITE."_imagem/_marca/{$m['nome']}.png";
                                        ?>
                                        <img src="<?php echo $urlImg;?>" alt="Foto indisponível da marca">
                                    </div>
                                    <div class="product-option-shop">
                                        <div class="add_to_cart_button">Pesquisar</div>
                                    </div>
                                </a>
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