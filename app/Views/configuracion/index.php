<div class="page-content">
	<div class="container-fluid">
		<div class="box-typical box-typical-padding">
			<h4><?php echo $titulo; ?></h4>
			<div class="row">
				<div class="col-md-12 p-t-1">
                    <form method="post" autocomplete="off" action="<?php echo base_url(); ?>/configuracion/actualizar">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="empresa_nombre">Nombre Empresa</label>
                                        <input type="text" class="form-control" id="empresa_nombre" name="empresa_nombre" maxlength="50" value="<?= $empresa_nombre['valor'];?>" autofocus required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="empresa_direccion">Dirección Empresa</label>
                                        <textarea class="form-control" id="empresa_direccion" name="empresa_direccion" maxlength="100" required><?= $empresa_direccion['valor'];?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="empresa_telefono">Teléfono Empresa</label>
                                        <input type="text" class="form-control" id="empresa_telefono" name="empresa_telefono" maxlength="10" value="<?= $empresa_telefono['valor'];?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
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