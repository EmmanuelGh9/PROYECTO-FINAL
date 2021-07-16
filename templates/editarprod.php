        <div class="container">
            <form method="post" action="http://sistema.com/modificar.php?id=<?=$y['id']?>">            
                
                <div class="mb-3">
                    <label class="form-label">Nombre</label> 
                    <input name="nombre" value="<?=$y['nombre']?>" class="form-control form-control-lg" type="text" placeholder="Ingresa el nombre del producto" aria-label=".form-control-lg example">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Talla</label> 
                    <input name="talla" value="<?=$y['talla']?>" class="form-control form-control-lg" type="text" placeholder="Ingresa la talla del producto" aria-label=".form-control-lg example">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Precio</label> 
                    <input name="precio" step="0.01" value="<?=$y['precio']?>" class="form-control form-control-lg" type="number" placeholder="Ingresa el precio" aria-label=".form-control-lg example">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Imagen</label> 
                    <input name="imagen" value="<?=$y['imagen']?>" class="form-control form-control-lg" type="text" placeholder="Ingresa el link de la imagen" aria-label=".form-control-lg example">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Descripción</label> 
                    <textarea name="descripcion" class="form-control form-control-lg" type="text" placeholder="Ingresa la descripción del producto" aria-label=".form-control-lg example"><?=$y['descripcion']?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success"><img src="/images/actualizar.png" alt="png" width="25px" heigth="25px"></button>
            </form>
        </div>       
    </body>
</html>    