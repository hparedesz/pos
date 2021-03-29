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
                    <form method="post" autocomplete="off" action="<?php echo base_url(); ?>/producto/insertar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="codigo_barra">Código de Barra</label>
                                    <input type="text" class="form-control" id="codigo_barra" name="codigo_barra" maxlength="50" autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" maxlength="50" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="precio_compra">Precio Compra</label>
                                    <input type="text" class="form-control" id="precio_compra" name="precio_compra" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="precio_venta">Precio Venta</label>
                                    <input type="text" class="form-control" id="precio_venta" name="precio_venta" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="stock_min">Stock Min</label>
                                    <input type="text" class="form-control" id="stock_min" name="stock_min" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="categoria">Categoria</label>
                                    <select name="categoria" id="categoria" class="form-control" required>
                                        <?php foreach ($categorias as $categoria):?>
                                            <option value="<?php echo $categoria['id']?>"><?php echo $categoria['nombre']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="marca">Marca</label>
                                    <select name="marca" id="marca" class="form-control" required>
                                        <?php foreach ($marcas as $marca):?>
                                            <option value="<?php echo $marca['id']?>"><?php echo $marca['nombre']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="presentacion">Presentación</label>
                                    <select name="presentacion" id="presentacion" class="form-control" required>
                                        <?php foreach ($presentaciones as $presentacion):?>
                                            <option value="<?php echo $presentacion['id']?>"><?php echo $presentacion['nombre']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a class="btn btn-warning" href="<?php echo base_url();?>/producto"><i class="glyphicon glyphicon-arrow-left"></i> Regresar</a>
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