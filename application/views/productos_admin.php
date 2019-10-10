<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <a style="width: 10%" href="<?= base_url();?>index.php/admin">
        <button type="button" class="btn btn-primary">Volver</button>
    </a> 
        <main role="main">
            <div class="album py-5 bg-light">
                <div class="container">
                        <h1 for="">Productos</h1>
                        <a href="" data-toggle="modal" data-target="#agregarModal" class="btn btn-success">Agregar</a>
                        <!--TABLE-->
                        <table class="table table.striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Img</th>
                                    <th scope="col">Cantidad Disponible</th>
                                    <th scope="col">Descripcion</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($productos as $file ) {
                                ?>  
                                    <tr>
                                        <th scope="row"><?php echo $file->id?></th>
                                        <td><?php echo $file->precio; ?></td>
                                        <td><?php echo $file->nombre; ?></td>
                                        <td><?php echo $file->img; ?></td>
                                        <td><?php echo $file->cantidad_disponible; ?></td>
                                        <td><?php echo $file->descripcion; ?></td>
                                        
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
                         <!--AGREGAR-->
                            <div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="<?= base_url();?>index.php/admin/productos/agregar" method="post">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="form-group">
                                                        <input type="text" name="precio" id="" placeholder="Precio ">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="nombre" id="" placeholder="Nombre ">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="img" id="" placeholder="Img">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="cantidad_disponible" id="" placeholder="Cantidad Disponible">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="descripcion" id="" placeholder="Descripcion">
                                                    </div>   
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button class="btn btn-success" type="submit">Agregar </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php
                                foreach ($productos as $file ) {
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
                                                Esta seguro de eliminar a <?php echo $file->nombre; ?>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="<?= base_url(); ?>index.php/admin/productos/eliminar" method="post">
                                                    <input type="hidden" name="id" value="<?= $file->id ?>">
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--EDITAR-->
                                <div class="modal fade" id="editarModal<?php echo $file->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="<?= base_url();?>index.php/admin/productos/editar" method="post">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <input type="hidden" name="id" value="<?= $file->id?>">
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $file->precio; ?>" name="precio" id="" placeholder="Precio ">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $file->nombre; ?>" name="nombre" id="" placeholder="Nombre">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $file->img; ?>" name="img" id="" placeholder="Img">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $file->cantidad_disponible; ?>" name="cantidad_disponible" id="" placeholder="Cantidad Disponiblre">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $file->descripcion; ?>" name="descripcion" id="" placeholder="Descripcion">
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
                    </div>
                </div>   
        </main>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <svg xmlns="http://www.w3.org/2000/svg" width="348" height="225" viewBox="0 0 348 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="17" style="font-weight:bold;font-size:17pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg>
    </body>
</html>