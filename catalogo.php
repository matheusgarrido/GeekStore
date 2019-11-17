<?php
require '_php/pagina.php';
$pagina = new Pagina('Catálogo');
$pagina->htmlCabecalho();
//var_dump($_GET);
$sql = "select p.idProduto as id, p.nome, t.nome as tipo, p.preco from produto p left join tipo t on t.idTipo=p.tipo ";
if (isset($_GET['marca']) && isset($_GET['produto'])){
    $sql = "{$sql} where p.marca = {$_GET['marca']} and p.tipo = {$_GET['produto']}";
}
elseif (isset($_GET['marca'])) {
    $sql = "{$sql} where p.marca = {$_GET['marca']}";
}
elseif (isset($_GET['marca'])) {
    $sql = "{$sql} where p.tipo = {$_GET['produto']}";
}
$produtos = $pagina->sqlSelect("{$sql} order by p.idProduto");
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
                foreach ($produtos as $roupa){
                    $roupa['nome'] = utf8_encode($roupa['nome']);
                    $roupa['tipo'] = utf8_encode($roupa['tipo']);
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-shop-product">
                            <a href="<?php echo SITE."produto.php?id={$roupa['id']}"; ?>">
                                <div class="product-upper">
                                    <?php
                                        $frente = "frente";
                                        if($roupa['tipo']=="Camiseta Dupla Face") $frente = $frente." 1";
                                        $urlImg = SITE."_imagem/_produto/{$roupa['tipo']}/{$roupa['nome']}/{$frente}.jpg";
                                    ?>
                                    <img style="height: 400px" src="<?php echo $urlImg;?>" alt="Foto indisponível de <?php echo $roupa['tipo'];?>">
                                </div>
                                <h2>
                                    <a href="<?php echo SITE."produto.php?id={$roupa['id']}"; ?>">
                                        <?php echo "{$roupa['nome']}"; ?>
                                    </a>
                                </h2>
                                <div class="product-carousel-price">
                                    <ins>R$ <?php echo $roupa['preco']?></ins>
                                    <!--<del>$999.00</del>-->
                                </div>  
                                <div class="product-option-shop">
                                    <div class="add_to_cart_button">Detalhes do produto</div>
                                </div>  
                            </a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>


<?php
$pagina->htmlFooter();
?>