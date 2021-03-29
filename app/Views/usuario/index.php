<div class="page-content">
	<div class="container-fluid">
		<div class="box-typical box-typical-padding">
			<h4><?php echo $titulo; ?></h4>
			<div class="row">
				<div class="col-md-12">
					<a href="<?php echo base_url(); ?>/usuario/nuevo" class="btn btn-primary">Agregar</a>
                    <a href="<?php echo base_url(); ?>/usuario/eliminados" class="btn btn-danger">Lista de Usuarios Inactivos</a>
                </div>
				<div class="col-md-12 p-t-1">
					<div class="table-responsive">
						<table id="table" class="display table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nombre</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Rol</th>
									<th>Estado</th>
                                    <th>Opciones</th>
								</tr>
							</thead>
							<tbody>
                                <?php foreach ($usuarios as $usuario):?>
								<tr>
									<td><?php print_r($usuario['id']);?></td>
									<td><?php print_r($usuario['nombre']);?></td>
                                    <td><?php print_r($usuario['username']);?></td>
                                    <td><?php print_r($usuario['email']);?></td>
                                    <td><?php print_r($usuario['rol']);?></td>
                                    <td><?php if ($usuario['estado'] == 1) {
                                            ?>
                                            <span class="label label-custom label-pill label-success">Activo</span>
                                            <?php
                                        } else {
                                            ?>
                                            <span class="label label-custom label-pill label-danger">Inactivo</span>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Editar" href="<?php echo base_url(); ?>/usuario/editar/<?php print_r($usuario['id']);?>"><i class="glyphicon glyphicon-pencil"></i></a>
										<a class="btn btn-danger btn-sm btn-desactivar" href="#" data-toggle="tooltip" data-placement="top" title="Desactivar" data-href="<?php echo base_url(); ?>/usuario/eliminar/<?php print_r($usuario['id']); ?>"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
								</tr>
								<?php endforeach;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>