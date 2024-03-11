  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ url('/dashboard') }}" class="brand-link">
          {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8"> --}}
          <i class="fas fa-home"></i>
          <span class="brand-text font-weight-light">Assets Management</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          {{-- <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Alexander Pierce</a>
              </div>
          </div> --}}

          {{-- <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div> --}}

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item menu-open1">
                      <a href="{{ url('/dashboard') }}" class="nav-link activea">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                              {{-- <i class="right fas fa-angle-left"></i> --}}
                          </p>
                      </a>
                  </li>
                  <li class="nav-item ">
                      <a href="{{ url('users') }}" class="nav-link ">
                          <i class="fas fa-user"></i>
                          <p>
                              Users
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ url('users') }}" class="nav-link ">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>List User</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('roles') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Role</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('permissions') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Permission</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('/department') }}" class="nav-link">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              Department

                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('roles') }}" class="nav-link">
                          <i class="fas fa-user-tag"></i>
                          <p>
                              Role & Permission

                          </p>
                      </a>
                  </li>

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
