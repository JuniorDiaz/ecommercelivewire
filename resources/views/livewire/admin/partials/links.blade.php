<div>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <div class="nav-link">
                    <div class="profile-image">
                        <img src="" alt="image"/>
                    </div>
                    <div class="profile-name">
                        <p class="name">
                            Welcome Jane
                        </p>
                        <p class="designation">
                            Super Admin
                        </p>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index-2.html">
                    <i class="fa fa-home menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#cadastrosgerais" aria-expanded="false"
                   aria-controls="e-commerce">
                    <i class="fas fa-shopping-cart menu-icon"></i>
                    <span class="menu-title">Cadastros Gerais</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="cadastrosgerais">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item {{isActive('admin.categorias')}}">
                            <a class="nav-link" href="{{route('admin.categorias')}}">Categorias</a>
                        </li>

                        <li class="nav-item {{isActive('admin.subcategorias')}}">
                            <a class="nav-link" href="{{route('admin.subcategorias')}}">Sub-Categorias</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>

</div>
