<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ auth()->user()->photo == null ? asset('backend/dist/img/user.jpg') : asset('storage/' . auth()->user()->photo) }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a  data-widget="control-sidebar" data-slide="true" href="#" role="button">{{ auth()->user()->name }}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Qidiruv" aria-label="Search">
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
        
        <li class="nav-item {{ Request::is(['admin/consumers', 'admin/consumers/*']) ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ Request::is(['admin/consumers', 'admin/consumers/*']) ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Iste'molchilar
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('consumers.index') }}" class="nav-link {{ Request::is('admin/consumers') ? 'active' : '' }}">
                <i class="fas fa-users mr-2"></i>
                <p> Barcha iste'molchilar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('consumers.active') }}" class="nav-link {{ Request::is('admin/consumers/active') ? 'active' : '' }}">
                <i class="fas fa-caret-up mr-2 text-success"></i>
                <p> Faol iste'molchilar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('consumers.passive') }}" class="nav-link {{ Request::is('admin/consumers/passive') ? 'active' : '' }}">
                <i class="fas fa-caret-right mr-2 text-warning"></i>
                <p> Passiv iste'molchilar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('consumers.noactive') }}" class="nav-link {{ Request::is('admin/consumers/noactive') ? 'active' : '' }}">
                <i class="fas fa-caret-down mr-2 text-danger"></i>
                <p> Nofaol iste'molchilar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('consumers.create') }}" class="nav-link {{ Request::is('admin/consumers/create') ? 'active' : '' }}">
                <i class="fas fa-user-plus mr-2"></i>
                <p>Iste'molchi qo'shish</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item {{ Request::is(['admin/addresses', 'admin/addresses/*']) ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ Request::is(['admin/addresses', 'admin/addresses/*']) ? 'active' : '' }}">
            <i class="nav-icon fas fa-map-marker-alt"></i>
            <p>
              Manzillar
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('addresses.index') }}" class="nav-link {{ Request::is('admin/addresses') ? 'active' : '' }}">
                <i class="fas fa-map-marker-alt mr-2"></i>                
                <p> Manzillar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('addresses.create') }}" class="nav-link {{ Request::is('admin/addresses/*') ? 'active' : '' }}">
                <i class="fas fa-plus mr-2"></i>                
                <p>Manzil qo'shish</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="{{ route('search') }}" class="nav-link {{ Request::is('admin/search') ? 'active' : '' }}">
            <i class="fas fa-search nav-icon"></i>
            <p>Qidiruv</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('trashed.index') }}" class="nav-link {{ Request::is('admin/trashed') ? 'active' : '' }}">
            <i class="fas fa-trash nav-icon"></i>
            <p>Savat</p>
          </a>
        </li>

        @if (auth()->user()->role->name == 'owner')
        <li class="nav-header">Manager</li>
        <li class="nav-item {{ Request::is(['admin/posts', 'admin/questions', 'admin/rates', 'admin/partners']) ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ Request::is(['admin/posts', 'admin/questions', 'admin/rates', 'admin/partners']) ? 'active' : '' }}">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Frontend
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('posts.index') }}" class="nav-link {{ Request::is(['admin/posts', 'admin/posts/*']) ? 'active' : '' }}">
                <i class="fas fa-clipboard nav-icon"></i>
                <p>Postlar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('informations.index') }}" class="nav-link {{ Request::is(['admin/informations', 'admin/informations/*']) ? 'active' : '' }}">
                <i class="fas fa-info-circle nav-icon"></i>
                <p>Ma'lumotlar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('rates.index') }}" class="nav-link {{ Request::is(['admin/rates', 'admin/rates/*']) ? 'active' : '' }}">
                <i class="fa fa-percent nav-icon"></i>
                <p>Tariflar</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('partners.index') }}" class="nav-link {{ Request::is(['admin/partners', 'admin/partners/*']) ? 'active' : '' }}">
                  <i class="fas fa-handshake nav-icon"></i>
                  <p>Hamkorlar</p>
                </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('questions.index') }}" class="nav-link {{ Request::is(['admin/questions', 'admin/questions/*']) ? 'active' : '' }}">
                <i class="fas fa-question-circle nav-icon"></i>
                <p>Savollar</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{  route('roles.index') }}" class="nav-link">
            <i class="nav-icon fa fa-unlock text-danger"></i>
            <p class="text">Rollar</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{  route('users.index') }}" class="nav-link">
            <i class="nav-icon fa fa-users text-success"></i>
            <p>Foydalanuvchilar</p>
          </a>
        </li>
        @endif

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>