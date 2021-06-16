<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">

                    <img src="<?= URL . 'melody/images/faces/face16.jpg' ?>" alt="brand logo" />
                </div>

            </div>
        </li>
       
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts1" aria-expanded="false" aria-controls="page-layouts">
                <i class="fas fa-chart-line menu-icon"></i>
                <span class="menu-title">Reportes</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts1">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item ">
                        <a class="nav-link" href="#">Reportes por día</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Reportes por fecha</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-cart-plus menu-icon"></i>
                <span class="menu-title">Compras</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../venta/index">
                <i class="fas fa-shopping-cart menu-icon"></i>
                <span class="menu-title">Ventas</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-tag menu-icon"></i>
                <span class="menu-title">Pedidos</span>
            </a>
        </li>
        
      

        

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="fas fa-chart-line menu-icon"></i>
                <span class="menu-title">Inventario</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">

                <li class="nav-item ">
                        <a class="nav-link" href="../producto/index">Producto</a>
                </li>  
                <li class="nav-item ">
                        <a class="nav-link" href="../categoria/index">Categoria</a>
                </li> 
                <li class="nav-item ">
                        <a class="nav-link" href="#">Etiiquetas</a>
                </li> 
                <li class="nav-item ">
                        <a class="nav-link" href="../marca/index">Marcas</a>
                </li> 
                   
                </ul>
            </div>
        </li>

       


        <li class="nav-item">
            <a class="nav-link" href="../cliente/index">
                <i class="fas fa-users menu-icon"></i>
                <span class="menu-title">Clientes</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../proveedor/index">
                <i class="fas fa-shipping-fast menu-icon"></i>
                <span class="menu-title">Proveedores</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../comprobante/index">
                <i class="fas fa-user-cog menu-icon"></i>
                <span class="menu-title">Comprobante</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../formapago/index">
                <i class="fas fa-shipping-fast menu-icon"></i>
                <span class="menu-title">Forma de pago</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../usuario/index">
                <i class="fas fa-user-tag menu-icon"></i>
                <span class="menu-title">Usuarios</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../usuarios_tipo/index">
                <i class="fas fa-user-cog menu-icon"></i>
                <span class="menu-title">Tipo Usuario</span>
            </a>
        </li>

       
       
    </ul>
</nav>