<div class="sidebar">
    <!-- SidebarSearch Form -->
    <div class="form-inline mt-2">
        <!-- User Profile at the Top -->
        
        <div class="form-inline px-2">
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
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link  {{ ($activeMenu == 'dashboard') ?
    'active' : '' }} ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header">Data Pengguna</li>
                <li class="nav-item">
                    <a href="{{ url('/###') }}" class="nav-link {{ ($activeMenu == '###') ?
    'active' : '' }} ">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>#####</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/###') }}" class="nav-link {{ ($activeMenu == '###') ?
    'active' : '' }}">
                        <i class="nav-icon far fa-###"></i>
                        <p>#####</p>
                    </a>
                </li>
                <li class="nav-header">Data </li>
                <li class="nav-item">
                    <a href="{{ url('/###') }}" class="nav-link {{ ($activeMenu == '###') ?
    'active' : '' }} ">
                        <i class="nav-icon fas fa-truck"></i>
                        <p>#####</p>
                    </a>
                </li>
                <li class="nav-header">Data ####</li>
                <li class="nav-item">
                    <a href="{{ url('/####') }}" class="nav-link {{ ($activeMenu ==
    '####') ? 'active' : '' }} ">
                        <i class="nav-icon far fa-bookmark"></i>
                        <p>#####</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/####') }}" class="nav-link {{ ($activeMenu ==
    '####') ? 'active' : '' }} ">
                        <i class="nav-icon far fa-list-alt"></i>
                        <p>#####</p>
                    </a>
                </li>

                
                <li class="nav-item">
                    <a href="{{ url('/logout') }}" class="nav-link {{ ($activeMenu ==
    'penjualan') ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>