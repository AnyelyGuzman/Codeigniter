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
        <main role="main">
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">PRODUCTOS</h1>
                    <center>
                        <a style="width: 10%" href="<?= base_url();?>index.php/principal/login">
                            <button style="width: 16%" type="button" class="btn btn-light btn-block">TERMINAR PEDIDO</button>
                        </a>
                    </center>
                </div>
            </section>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <?php
                            foreach ($productos as $file ) {
                        ?>
                            <div class="col-md-4">
                                <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src="<?= base_url()."static/img/".$file->img; ?>" alt="" style="height: 225px; width: 100%; display: block;" data-holder-rendered="true">
                                    <div class="card-body">
                                        <h3>
                                            <?php echo $file->nombre; ?>
                                        </h3>
                                        <p class="card-text">
                                            <?php
                                                echo $file->descripcion."<br>";
                                                echo "Valor unitario: ".$file->precio."<br>";
                                                echo "Cantidad disponible: ".$file->cantidad_disponible;
                                            ?>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModalRegistro<?= $file->id ?>">Comprar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <?php
                        foreach ($productos as $file ) {
                    ?>
                        <div class="modal fade" id="exampleModalRegistro<?= $file->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						    <div class="modal-dialog" role="document">
							    <div class="modal-content">
								    <div class="modal-header">
									    <h5 class="modal-title" id="exampleModalLabel">Compra</h5>
									    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										    <span aria-hidden="true">&times;</span>
									    </button>
                                    </div>
    						        <div class="modal-body">
                                        <form action="<?= base_url(); ?>index.php/producto/pedido" method="post">
                                            <input type="hidden" name="id" value="<?= $file->id ?>">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="cantidad" class="form-control" placeholder="Cantidad" type="number">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModalPago">Comprar</button>
                                            </div>
                                        </form>
    					            </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>
							    </div>
                            </div>
                        </div>
                    <?php } ?>

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