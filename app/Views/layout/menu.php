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
    </ul>
</nav>
