<?php include "FRONT-header.php" ?>
<div class="card titulofaixa">
      <div class="card-body">
        Prato fitchef
      </div>
    </div>
<div class="container produtobox">
  <div class="row">
    <div class="col-sm-6">
      <img class="imgproduto" src="<?php echo $url; ?>/View/img/produtos/<?php echo $produto['imagem'] ?>">
    </div>
    <div class="col-sm-6">
      <h2><?php echo $produto['nome']; ?></h2>

      <a href="#"> Adicionar ao carrinho </a>
      <br><br>
      <p><?php echo $produto['nome']; ?></p>

      <hr style="border:1px dashed gray;">
      <p> As porções são individuais. Clique em + para adicionar.
        <hr style="border:1px dashed gray;">

        <div class="container pricequant">
          <div class="row">

            <div class="col-sm-4">
              <h2>R$19,90</h2>
            </div>

            <div class="col-sm-4">
              <p>Quantidade:</p>
            </div>





<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
  Adicionar ao carrinho
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pronto!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Seu pedido foi adicionado ao carrinho com sucesso!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Continuar escolhendo</button>
        <a href="<?php echo $url; ?>/carrinho"> <button type="button" class="btn btn-primary">Ir para o carrinho</button> </div> </a>
    </div>
  </div>
</div>
           
          </div>
        </div>


        <hr style="border:1px dashed gray;">




        <div class="container descritext">
          <div class="row">


            <div class="col-sm">
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

</div>
</div>
</div>


  <div class="container">
    <div class="card">
      <div class="card-body">
        Descrição
      </div>
    </div>
    <div class="textoproduto">
    <div>
    <p><?php echo $produto['descricao']; ?></p>
    </div>
 


  </div>
</div>
</div>

<?php include "FRONT-footer.php" ?>