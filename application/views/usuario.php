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
        <p><?= $message; ?> </p>
        <div class="container">
            <h1 for="">Usuarios</h1>
            <a href="" data-toggle="modal" data-target="#agregarModal" class="btn btn-success">agregar</a>
            <!--TABLE-->
            <table class="table table.striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Contrasena</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($usuarios as $file ) {
                    ?>  
                        <tr>
                            <th scope="row"><?php echo $file->id?></th>
                            <td><?php echo $file->nombre; ?></td>
                            <td><?php echo $file->apellido; ?></td>
                            <td><?php echo $file->telefono; ?></td>
                            <td><?php echo $file->direccion; ?></td>
                            <td><?php echo $file->usuario; ?></td>
                            <td><?php echo $file->contrasena; ?></td>
                            
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
                        <form action="<?= base_url();?>index.php/usuario/agregar" method="post">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="form-group">
                                        <input type="text" name="nombre" id="" placeholder="Nombre ">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="apellido" id="" placeholder="Apellido ">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="telefono" id="" placeholder="Telefono">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="direccion" id="" placeholder="Direccion">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="usuario" id="" placeholder="Usuario">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="contrasena" id="" placeholder="Contraseña">
                                    </div>
                                    <select class="form-control form-control-sm" name="rol">
                                        <option>Seleccione un rol</option>
                                        <option value="1"> Admin </option>
                                        <option value="2"> Usuario </option>
                                    </select>

                                    
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
                foreach ($usuarios as $file ) {
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
                                <form action="<?= base_url(); ?>index.php/usuario/eliminar" method="post">
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
                            <form action="<?= base_url();?>index.php/usuario/editar" method="post">
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
                                            <input type="text" value="<?php echo $file->nombre; ?>" name="nombre" id="" placeholder="nombre ">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="<?php echo $file->apellido; ?>" name="apellido" id="" placeholder="usuario">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="<?php echo $file->telefono; ?>" name="telefono" id="" placeholder="usuario">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="<?php echo $file->direccion; ?>" name="direccion" id="" placeholder="usuario">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="<?php echo $file->usuario; ?>" name="usuario" id="" placeholder="usuario">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="<?php echo $file->contrasena; ?>" name="contrasena" id="" placeholder="contrasena">
                                        </div>
                                        <select class="form-control form-control-sm" name="rol">
                                            <option>Seleccione un rol</option>
                                            <option value="1"> Admin </option>
                                            <option value="2"> Usuario </option>
                                        </select>
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