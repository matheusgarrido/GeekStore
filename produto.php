<?php
require '_php/pagina.php';
$pagina = new Pagina('Produto');
$pagina->htmlCabecalho();
$id = $_GET['id'];
$produto = $pagina->sqlSelect("select p.*, t.nome as nomeTipo from produto p left join tipo t on t.idTipo=p.tipo where p.idProduto={$id}")[0];
$nome = utf8_encode($produto['nome']);
$cor = utf8_encode($produto['cor']);
$tecido = utf8_encode($produto['tecido']);
$nomeTipo = utf8_encode($produto['nomeTipo']);
$preco = $produto['preco'];
?>

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2><?php echo "{$nomeTipo}"; ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>

            <div class="col-md-7">
                <div class="product-content-right">
                    <div class="product-breadcroumb">
                        <a href="<?php echo SITE; ?>">Início</a>
                        <a href="<?php echo SITE."marca.php" ?>">Marca</a>
                        <a href="<?php echo SITE."catalogo.php" ?>">Catálogo</a>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-images">
                                <?php
                                $frente = "frente";
                                if($nomeTipo=="Camiseta Dupla Face") {
                                    $imgRoupa = ["frente 1", "costa 1", "frente 2", "costa 2"];
                                }
                                elseif($nomeTipo=="Meias") {
                                    $imgRoupa = ["frente", "lateral"];
                                }
                                else {
                                    $imgRoupa = ["frente", "costa"];
                                }
                                $urlImg = SITE."_imagem/_produto/{$nomeTipo}/{$nome}/{$imgRoupa[0]}.jpg";
                                ?>
                                <div class="product-main-img">
                                    <a href="<?php echo $urlImg; ?>">
                                        <img src="<?php echo $urlImg; ?>" alt="">
                                    </a>
                                </div>
                                <div class="product-gallery">
                                    <?php
                                    foreach ($imgRoupa as $img){
                                        $urlImg = SITE."_imagem/_produto/{$nomeTipo}/{$nome}/{$img}.jpg";
                                        ?>
                                            <a href="<?php echo $urlImg; ?>">
                                                <img src="<?php echo $urlImg ?>" alt="<?php echo $img; ?>">
                                            </a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name"><?php echo $nome; ?></h2>
                                <div class="product-inner-price">
                                    <ins>R$ <?php echo $preco; ?></ins>
                                    <h2>Sem estoque</h2>  
                                    <p><?php echo $nomeTipo?></p>
                                    <p>Cor: <?php echo $cor?></p>
                                    <p>Tecido: <?php echo $tecido?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
</div>


<?php
$pagina->htmlFooter();
?>
