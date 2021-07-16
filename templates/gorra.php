        <div class="card text-center" style="width: 18rem;">
            <img src="<?= $y['imagen'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><font face="Courier"><?= $y['nombre'] ?></font></h5>
                <p class="card-text"><font face="Courier">$<?= $y['precio'] ?><br><?= $y['descripcion'] ?></font></p>
                <a href="#" class="btn btn-info"><img src="/images/carrito-de-compras.png" alt="png" width="25px" heigth="25px"></a>
                <a type="button" class="btn btn-danger" href="http://sistema.com/borrarprod.php?id=<?=$y['id']?>"><img src="/images/eliminar (1).png" alt="png" width="25px" heigth="25px"></a>
            </div>
        </div>		 
	</body>
</html>