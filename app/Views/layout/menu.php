<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="red">
            <a href="mail.html">
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Dashboard</span>
            </a>
        </li>
        <li class="green">
            <a href="mail.html">
                <i class="font-icon glyphicon glyphicon-shopping-cart"></i>
                <span class="lbl">POS</span>
            </a>
        </li>
        <li class="brown with-sub">
            <span>
                <i class="font-icon glyphicon glyphicon-barcode"></i>
                <span class="lbl">Productos</span>
            </span>
            <ul>
                <li><a href="<?php echo base_url();?>/producto"><span class="lbl">Lista de Productos</span></a></li>
                <li><a href="<?php echo base_url();?>/categoria"><span class="lbl">Lista de Categorias</span></a></li>
                <li><a href="<?php echo base_url();?>/presentacion"><span class="lbl">Lista de Presentaciones</span></a></li>
                <li><a href="<?php echo base_url();?>/marca"><span class="lbl">Lista de Marcas</span></a></li>
            </ul>
        </li>
        <li class="grey with-sub">
            <span>
                <i class="font-icon glyphicon glyphicon-user"></i>
                <span class="lbl">Repartidores</span>
            </span>
            <ul>
                <li><a href="<?php echo base_url();?>/cliente"><span class="lbl">Lista de Repartidores</span></a></li>
            </ul>
        </li>
        <li class="red with-sub">
            <span>
                <i class="font-icon glyphicon glyphicon-user"></i>
                <span class="lbl">Clientes</span>
            </span>
            <ul>
                <li><a href="<?php echo base_url();?>/cliente"><span class="lbl">Lista de Clientes</span></a></li>
            </ul>
        </li>
        <li class="blue-darker with-sub">
            <span>
                <i class="font-icon glyphicon glyphicon-cog"></i>
                <span class="lbl">Administración</span>
            </span>
            <ul>
                <li><a href="<?php echo base_url();?>/configuracion"><span class="lbl">Configuración</span></a></li>
                <li><a href="<?php echo base_url();?>/usuario"><span class="lbl">Usuarios</span></a></li>
                <li><a href="<?php echo base_url();?>/rol"><span class="lbl">Roles</span></a></li>
                <li><a href="<?php echo base_url();?>/caja"><span class="lbl">Cajas</span></a></li>
            </ul>
        </li>
    </ul>
</nav>
