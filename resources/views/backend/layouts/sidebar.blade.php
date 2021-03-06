@section('sidebar')
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{asset('assets/img/logo.jpg')}}" alt="Everest Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Everest Classic</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('images/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ucfirst( auth()->user()->name)}}</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="{{url('/home')}}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cart-arrow-down"></i>
                            <p>
                                Interior Design
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('/items/create')}}" class="nav-link">
                                    <i class="fa fa-plus-circle nav-icon"></i>
                                    <p>Add Design</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('items')}}" class="nav-link">
                                    <i class="fa fa-eye nav-icon"></i>
                                    <p>Designs</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-wrench"></i>
                            <p>
                                Services
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('services/create')}}" class="nav-link">
                                    <i class="fa fa-plus-circle nav-icon"></i>
                                    <p>Add Services</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('services')}}" class="nav-link">
                                    <i class="fa fa-eye nav-icon"></i>
                                    <p>Services</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Teams
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('teams/create')}}" class="nav-link">
                                    <i class="fa fa-plus-circle nav-icon"></i>
                                    <p>Add Team</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('teams')}}" class="nav-link">
                                    <i class="fa fa-eye nav-icon"></i>
                                    <p>Teams</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
@endsection
