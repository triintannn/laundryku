<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin') }}" class="brand-link">
      <img src="/adminlte/dist/img/laundry.png" alt="laundry Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Laundryku</span>
    </a>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{ url('admin') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="{{ url('admin/outlet') }}" class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Outlet
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="{{ url('admin/laundry') }}" class="nav-link ">
              <i class="nav-icon fas fa-tshirt"></i>
              <p>
                Paket Laundry
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="{{ url('admin/users') }}" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('admin/members') }}" class="nav-link active">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Members
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="{{ url('admin/transaksi') }}" class="nav-link ">
              <i class="nav-icon fas fa-cash-register"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ url('admin/laporan') }}" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>