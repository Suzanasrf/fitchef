<?php include "FRONT-header.php" ?>

<div class="card titulofaixa">
    <div class="card-body titulo">
        Meu carrinho
    </div>
</div>
</div>
<div class="sectiongray">
    <div class="container">
        <div class="carrintable">
        
        <div class="row">
        
    <?php
        @$carrinho = $_SESSION['carrinho'];

        if($carrinho===null || empty($carrinho->getItems())){
            // Inicio HTML
            ?>
                <?php include "FRONT-carrinhovazio.php" ?>

            <?php
            // Fim HTML
        }else{

            foreach ($carrinho->getItems() as $item){
                $produto = $item->getProduto();
                $link = "http://localhost/fitchef/carrinho/remover/".$produto->getId();
             
                // Inicio HTML
            ?>

                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-md-2"><img width="100%" src="<?php echo $url.'/View/img/produtos/'.$produto->getImagem(); ?>"></div>
                        <div class="col-md-10">
                        <p><?php echo $produto->getNome(); ?></p>
                        <a href="<?php echo $url; ?>/carrinho/remover/<?php echo $produto->getId() ?>" class="btn">Remover</a>
                        
                        </div>
                    </div>
                </div>

     <?php   
     // Fim HTML
            }
        }
    ?>





               
        
        
        
        <!--
         
            <div class="row">

                <div class="col-sm-8">
                    <div class="container ">
                        <div class="row carrincontainer">
                            <div class="col-sm-6">
                                produto
                            </div>
                            <div class="col-sm-3">
                                quantidade
                            </div>
                            <div class="col-sm-3">
                                preço
                            </div>
                        </div>
                    </div>
                </div>
  -->

                <div class="col-sm-4 fretecontainer">
                <i class="fas fa-truck fa-3x"></i>

                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="0000-000" aria-label="0000-000"
                  aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">Calcular Frete</button>
                </div>
              </div>
                </div>
                

            </div>

            
        </div>
    </div>
</div>
    </div>























<?php include "FRONT-footer.php" ?>