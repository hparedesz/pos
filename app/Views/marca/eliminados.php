<div class="page-content">
    <div class="container-fluid">
        <div class="box-typical box-typical-padding">
            <h4><?php echo $titulo; ?></h4>
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo base_url(); ?>/marca" class="btn btn-danger">Lista de Categorias Activas</a>
                </div>
                <div class="col-md-12 p-t-1">
                    <div class="table-responsive">
                        <table id="table" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($marcas as $marca):?>
                                <tr>
                                    <td><?php print_r($marca['id']);?></td>
                                    <td><?php print_r($marca['nombre']);?></td>
                                    <td><?php if ($marca['estado'] == 1) {
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
                                        <a class="btn btn-success btn-sm btn-activar" href="#" data-toggle="modal" data-placement="top" title="Activar" data-href="<?php echo base_url(); ?>/marca/activar/<?php print_r($marca['id']); ?>"><i class="glyphicon glyphicon-check"></i></a>
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