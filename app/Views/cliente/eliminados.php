<div class="page-content">
    <div class="container-fluid">
        <div class="box-typical box-typical-padding">
            <h4><?php echo $titulo; ?></h4>
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo base_url(); ?>/cliente" class="btn btn-danger">Lista de Clientes Activos</a>
                </div>
                <div class="col-md-12 p-t-1">
                    <div class="table-responsive">
                        <table id="table" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Nit</th>
                                <th>Teléfono</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($clientes as $cliente):?>
                                <tr>
                                    <td><?php print_r($cliente['id']);?></td>
                                    <td><?php print_r($cliente['nombre']);?></td>
                                    <td><?php print_r($cliente['direccion']);?></td>
                                    <td><?php print_r($cliente['nit']);?></td>
                                    <td><?php print_r($cliente['telefono']);?></td>
                                    <td><?php if ($cliente['estado'] == 1) {
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
                                        <a class="btn btn-success btn-sm btn-activar" href="#" data-toggle="tooltip" data-placement="top" title="Activar" data-href="<?php echo base_url(); ?>/cliente/activar/<?php print_r($cliente['id']); ?>"><i class="glyphicon glyphicon-check"></i></a>
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