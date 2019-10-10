<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Hello, world!</title>
    </head>
    <body>
    <a style="width: 10%" href="<?= base_url();?>index.php/admin">
        <button type="button" class="btn btn-primary">Volver</button>
    </a>
        <div class="container">
            <h1 for="">Pedidos</h1>
            <!--TABLE-->
            <table class="table table.striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">nombre</th>
                        <th scope="col">telefono</th>
                        <th scope="col">direccion</th>
                        <th scope="col">pedido</th>
                        <th scope="col">precio unitario</th>
                        <th scope="col">cantidad</th>
                        <th scope="col">estado</th>
                        <th scope="col">total</th>
                        <th scope="col">editar</th>
                        <th scope="col">eliminar</th>   
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($pedidos as $file ) {
                    ?>  
                        <tr>
                            <th scope="row"><?php echo $file->id?></th>
                            <td><?php echo $file->nombre; ?></td>
                            <td><?php echo $file->telefono; ?></td>
                            <td><?php echo $file->direccion; ?></td>
                            <td><?php echo $file->pedido; ?></td>
                            <td><?php echo $file->precio; ?></td>
                            <td><?php echo $file->cantidad; ?></td>
                            <td><?php 
                                if($file->estado == 1)echo "En Proceso";
                                if ($file->estado == 2) echo "Entregado";
                                if ($file->estado == 3) echo "Cancelado"; 
                            ?></td>
                            <td><?php echo $file->total; ?></td>
                            
                            <td>
                                <a href=""class="btn btn-success" data-toggle="modal" data-target="#editarModal<?php echo $file->id?>">Editar</a>
                            </td>
                            <td> 
                                <a href=""class="btn btn-danger" data-toggle="modal" data-target="#eliminaModal<?php echo $file->id?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            
            <?php
                foreach ($pedidos as $file ) {
            ?>
                <!--ELIMINAR-->
                <div class="modal fade" id="eliminaModal<?php echo $file->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Esta seguro de eliminar el pedido con id : <?php echo $file->id; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form action="<?= base_url()?>index.php/admin/eliminarPedido" method="post">
                                    <input type="hidden" name="id" value="<?= $file->id?>"> 
                                    <button type="submit" class="btn btn-info"> Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--EDITAR-->
                <div class="modal fade" id="editarModal<?php echo $file->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="<?= base_url()?>index.php/admin/editarPedido" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar Pedido</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <input type="hidden" name="id" value="<?= $file->id ?>">
                                        <div class="form-group">
                                            <select class="form-control form-control-sm" name="pedido">
                                                <option>Seleccione un producto</option>
                                                <?php
                                                    foreach ($productos as $fileP )
                                                    {
                                                        if($file->proId == $fileP->id) echo "<option selected value='$fileP->id'>$fileP->nombre</option>";
                                                        else echo "<option value='$fileP->id'>$fileP->nombre</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control form-control-sm" name="estado">
                                                <option>Seleccione un producto</option>
                                                <?php
                                                    if($file->estado == 1) echo "<option selected value='1'>En Proceso</option>";
                                                    else echo "<option value=1>En Proceso</option>";
                                                    
                                                    if($file->estado == 2) echo "<option selected value='2'>Entregado</option>";
                                                    else echo "<option value=2>Entregado</option>";

                                                    if($file->estado == 3) echo "<option selected value='3'>Cancelado</option>";
                                                    else echo "<option value=3>Cancelado</option>";
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" value="<?= $file->cantidad; ?>" name="cantidad" placeholder="Cantidad">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Editar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>