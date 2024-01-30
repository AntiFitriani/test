@if(Auth()->User()->level == 'Admin')
<!-- Sidebar Menu -->
 <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="/dashboard" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Menu Utama
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/user" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Kelola Data Kasir</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/supplier" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Kelola Data Supplier</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/sepatu" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Kelola Data Sepatu</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/penjualan" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Kelola Data Penjualan</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/member" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Kelola Data Member</p>
            </a>
          </li>

        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-search"></i>
          <p>
            Setting
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p><b>Logout</b></p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>

  <!-- /.jika bukan admin -->

@else
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="/dashboard" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>
          Menu Utama
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/penjualan" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Kelola Data Penjualan</p>
          </a>
        </li>

      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-search"></i>
        <p>
          Setting
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/logout" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p><b>Logout</b></p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
@endif
