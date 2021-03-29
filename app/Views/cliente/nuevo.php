<div class="page-content">
    <div class="container-fluid">
        <div class="box-typical box-typical-padding">
            <h4><?php echo $titulo; ?></h4>
            <div class="row">
                <div class="col-md-12 p-t-1">
                    <?php if (isset($validation)) { ?>
                        <div class="alert alert-danger alert-fill alert-close alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <?php
                            echo $validation->listErrors();
                            ?>
                        </div>
                    <?php } ?>
                    <form method="post" autocomplete="off" action="<?php echo base_url(); ?>/cliente/insertar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" maxlength="50" autofocus required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="direccion">Dirección</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" maxlength="100" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nit">Nit</label>
                                    <input type="text" class="form-control" id="nit" name="nit" maxlength="15" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono" maxlength="25" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a class="btn btn-warning" href="<?php echo base_url();?>/cliente"><i class="glyphicon glyphicon-arrow-left"></i> Regresar</a>
                                    <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Guardar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>