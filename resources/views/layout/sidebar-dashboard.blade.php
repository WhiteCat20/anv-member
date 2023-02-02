<aside class="bg-green-anv main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar" style="padding-top: 2rem">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item sidebar-item">
                    <a href="{{ route('dashboard.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item sidebar-item">
                    <a href="{{ route('dashboard.payment') }}" class="nav-link">
                        <i class="nav-icon fas fa-money-bill-alt"></i>
                        <p>
                            Payment
                        </p>
                    </a>
                </li>
                <li class="nav-item sidebar-item">
                    <a href="{{ route('dashboard.abstrak') }}" class="nav-link">
                        <i class="far fa-copy nav-icon"></i>
                        <p>Abstrak</p>
                    </a>
                </li>
                <li class="nav-item sidebar-item">
                    <a href="{{ route('dashboard.paper') }}" class="nav-link">
                        <i class="nav-icon fas fa-sticky-note"></i>
                        <p>
                            Paper
                        </p>
                    </a>
                </li>
                <li class="nav-item sidebar-item">
                    <a href="{{ route('dashboard.ppt') }}" class="nav-link">
                        <i class="nav-icon fas fa-tv"></i>
                        <p>
                            Presentation
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
