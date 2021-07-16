		<?php
			if(count($gorra) == 0){
		?>
		<h1>No hay existencias</h1>
		<?php
			}
		?>

		<div class="container">
			<div class="row">
				<?php 
					foreach($gorra as $gor){
				?>
					<div class="col-sm text-center bg-light">
						<div class="card border-secondary my-2" style="width: 18rem;">
							<img src="<?=$gor['imagen'] ?>" class="card-img-top" widht="100" height="200">
							<div class="card-body">
								<h5 class="card-title"><font face="Courier"><?=$gor['nombre'] ?></font></h5>
								<p class="card-text"><font face="Courier">$<?=$gor['precio'] ?></font></p>
								<a href="/gorra.php?id_gorra=<?=$gor['id']?>" class="btn btn-info"><img src="/images/carrito-de-compras.png" alt="png" width="25px" heigth="25px"></a>
								<a type="button" class="btn btn-danger" href="http://sistema.com/borrarprod.php?id=<?=$gor['id']?>"><img src="/images/eliminar (1).png" alt="png" width="25px" heigth="25px"></a>
								<a type="button" class="btn btn-warning" href="http://sistema.com/editarprod.php?id=<?=$gor['id']?>"><img src="/images/editar.png" alt="png" width="25px" heigth="25px"></a>
							</div>
						</div>
					</div>
				<?php
					}
				?>		  
			</div>
		</div>
	</body>
</html>
