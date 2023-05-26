<nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item dropdown">
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Asosiy</a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="width:180px">

          <li class="dropdown-submenu dropdown-hover">
            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle"><i class="fas fa-users mr-2"></i> Iste'molchilar</a>
            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
              <li>
                <a tabindex="-1" href="{{ route('consumers.index') }}" class="dropdown-item">Barcha iste'molchilar</a>
              </li>
              <li>
                <a tabindex="-1" href="{{ route('consumers.active') }}" class="dropdown-item">Faollar</a>
              </li>
              <li>
                <a tabindex="-1" href="{{ route('consumers.passive') }}" class="dropdown-item">Passivlar</a>
              </li>
              <li>
                <a tabindex="-1" href="{{ route('consumers.noactive') }}" class="dropdown-item">Nofaollar</a>
              </li>
            </ul>
          </li>

          <li class="dropdown-divider"></li>

          <li class="dropdown-submenu dropdown-hover">
            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle"><i class="fas fa-map-marker-alt mr-2"></i> Manzillar</a>
            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
              <li>
                <a tabindex="-1" href="{{ route('addresses.index') }}" class="dropdown-item">Manzillar</a>
              </li>
              <li>
                <a tabindex="-1" href="{{ route('addresses.create') }}" class="dropdown-item">Manzil yaratish</a>
              </li>
            </ul>
          </li>

          <li class="dropdown-divider"></li>

          <li><a href="{{ route('search') }}" class="dropdown-item"><i class="fas fa-search mr-2"></i> Qidiruv</a></li>

          <li class="dropdown-divider"></li>

          <li><a href="{{ route('trashed.index') }}" class="dropdown-item"><i class="fas fa-trash mr-2"></i> Savat</a></li>
        </ul>
      </li>

      {{-- <li class="nav-item dropdown">
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Profil</a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">

          <li class="dropdown-submenu dropdown-hover">
            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle"><i class="fas fa-cog mr-2"></i> Sozlamalar</a>
            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
              <li>
                <a tabindex="-1" href="{{ route('user.edit', auth()->user()->id) }}" class="dropdown-item">Ma'lumotlarni o'zgartirish</a>
              </li>
              <li>
                <a tabindex="-1" href="{{ route('user.password', auth()->user()->id) }}" class="dropdown-item">Parolni o'zgartirish</a>
              </li>
              <li>
                <a tabindex="-1" href="{{ route('user.photo', auth()->user()->id) }}" class="dropdown-item">Profil rasmini belgilash</a>
              </li>
            </ul>
          </li>

          <li class="dropdown-divider"></li>

          <li>
            <form action="{{ route('logout') }}" method="POST" style="margin-left:5px;">
              @csrf
              <b class="mb-1"><button class="btn text-white"><i class="fas fa-sign-out-alt mr-2"></i>Chiqish</button></b>
            </form>
          </li>

        </ul>
      </li> --}}
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form action="{{ route('consumers.search') }}" method="GET" class="form-inline">
            @csrf
            <div class="input-group input-group-sm">
              <input name="search" class="form-control form-control-navbar" type="search" placeholder="Iste'molchi ismini kiriting" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <h4><i class="fa fa-user-circle"></i></h4>
        </a>
      </li>
    </ul>
  </nav>