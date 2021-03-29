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
                    <form method="post" autocomplete="off" action="<?php echo base_url();?>/usuario/actualizar">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $usuario['id'];?>">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $usuario['nombre'];?>" maxlength="25" autofocus required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" maxlength="25" value="<?php echo $usuario['username'];?>" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" maxlength="50" value="<?php echo $usuario['email'];?>" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="rol">Rol</label>
                                    <select name="rol" id="rol" class="form-control" required>
                                        <?php foreach ($roles as $rol):?>
                                        <option value="<?php echo $rol['id'] ?>" <?php if($usuario['idrol']==$rol['id']){echo 'selected';}?>><?php echo $rol['nombre'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a class="btn btn-warning" href="<?php echo base_url();?>/usuario"><i class="glyphicon glyphicon-arrow-left"></i> Regresar</a>
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