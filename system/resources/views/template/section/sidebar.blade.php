@php
  function checkRouteActive($route){
  if(Route:: current() == $route) return 'active';
}
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="" alt="" class=""
           style="opacity: .8">
      <span class="brand-text font-weight-light">Fashionshop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="" class="" alt=" ">
        </div>
        <div class="info">
          <a href="#" class="d-block">lidia</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{url('beranda')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('produk')}}" class="nav-link active">
                 <i class="fa fa-product-hunt" aria-hidden="true"></i>
                  <p>Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('kategory')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Kategori</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('promo')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Promo</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('registrasi')}}" class="nav-link">
              <i class="fa fa-registered" aria-hidden="true"></i>
              <p>Registrasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('login')}}" class="nav-link">
              <i class="fa fa-registered" aria-hidden="true"></i>
              <p>login</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pelanggan" class="nav-link">
               <i class="far fa-circle nav-icon"></i>
              <p>Pelanggan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="supplier" class="nav-link">
               <i class="far fa-circle nav-icon"></i>
              <p>Supplier</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>