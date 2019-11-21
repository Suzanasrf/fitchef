<?php require_once "FRONT-header.php" ?>

<div class="card titulofaixa">
      <div class="card-body">
        Porções
      </div>
    </div>



<div class="container boxingrediente">
	<div class="row">
		<div class="product-img col-sm-6">
			<img src="../img/frango.jpg" alt="ingrediente1" width="450px" height="370px;">
		</div>
		
		<div class="product-description col-sm-6">
			<h2>Purê de batata - 100g</h2>
			<p><strong>Quantidade Por 100 gramas:</strong><br>
				Calorias: 88<br>
				Gorduras Totais: 2,8 g	<br>
				Gorduras Saturadas: 0,6 g	<br>
				Gorduras Polisaturadas: 1,3 g	<br>
				Gorduras Monosaturadas: 0,7 g	<br>
				Gorduras Trans: 0,1 g	<br>
				Colesterol: 0 mg	<br>
				Sódio: 306 mg	<br>
				Potássio: 286 mg	<br>
				Carboidratos: 15 g	<br>
				Fibra Alimentar: 1,3 g	<br>
				Açúcar: 0,5 g	<br>
				Proteínas: 1,7 g	<br></p>
				<br>
		
			<div data-app="product.quantity" id="quantidade">
			  <span id="span_erro_carrinho" class="blocoAlerta" style="display:none;">1</span>
			  <label>Quantidade:</label>      
			  <input type="button" id="plus" value='-' onclick="process(-1)" />
			  <input id="quant" name="quant" class="text" size="1" type="text" value="1" maxlength="5" />
			  <input type="button" id="minus" value='+' onclick="process(1)">
			</div>
			<button type="button" class="btn btn-warning">Comprar</button>
			</div>
			
		</div>
</div>

<?php require_once "FRONT-footer.php" ?>