<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.index')}}" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Cinema tools
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <div>
                        <a href="{{route('cinema.index')}}" class="nav-link">
                            <i class="fas fa-kaaba"></i>
                            <p>Cinemas</p>
                        </a>
                    </div>
                    <div>
                        <a href="./index.html" class="nav-link">
                            <i class="fas fa-film"></i>
                            <p>Films</p>
                        </a>
                    </div>
                    <div>
                        <a href="./index.html" class="nav-link">
                            <i class="fas fa-image"></i>
                            <p>Sliders</p>
                        </a>
                    </div>
                    <div>
                        <a href="./index.html" class="nav-link">
                            <i class="fas fa-comment"></i>
                            <p>Reviews</p>
                        </a>
                    </div>
                    <div>
                        <a href="./index.html" class="nav-link">
                            <i class="fas fa-envelope-open"></i>
                            <p>Feedback</p>
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
