<div class="page-content">
	<div class="container-fluid">
		<div class="box-typical box-typical-padding">
			<h4><?php echo $titulo; ?></h4>
			<div class="row">
				<div class="col-md-12">
					<a href="<?php echo base_url(); ?>/producto/nuevo" class="btn btn-primary">Agregar</a>
					<a href="<?php echo base_url(); ?>/producto/eliminados" class="btn btn-danger">Lista de Productos Inactivas</a>
				</div>
				<div class="col-md-12 p-t-1">
					<div class="table-responsive">
						<table id="table" class="display table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>No.</th>
									<th>Código de Barra</th>
									<th>Nombre Producto</th>
									<th>Precio de Compra</th>
									<th>Precio de Venta</th>
									<th>Stock Min</th>
									<th>Categoria</th>
									<th>Marca</th>
									<th>Presentacion</th>
                                    <th>Estado</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($productos as $producto) : ?>
									<tr>
										<td><?php print_r($producto['idproducto']); ?></td>
										<td><?php print_r($producto['codigo_barra']); ?></td>
										<td><?php print_r($producto['producto']); ?></td>
                                        <td><?php print_r($producto['precio_compra']); ?></td>
                                        <td><?php print_r($producto['precio_venta']); ?></td>
                                        <td><?php print_r($producto['stock_min']); ?></td>
                                        <td><?php print_r($producto['categoria']); ?></td>
                                        <td><?php print_r($producto['marca']); ?></td>
                                        <td><?php print_r($producto['presentacion']); ?></td>
										<td><?php if ($producto['estado'] == 1) {
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
											<a class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Editar" href="<?php echo base_url(); ?>/producto/editar/<?php print_r($producto['id']); ?>"><i class="glyphicon glyphicon-pencil"></i></a>
											<a class="btn btn-danger btn-sm btn-desactivar" href="#" data-toggle="tooltip" data-placement="top" title="Desactivar" data-href="<?php echo base_url(); ?>/producto/eliminar/<?php print_r($producto['id']); ?>"><i class="glyphicon glyphicon-trash"></i></a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>