
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

<a class="navbar-brand mr-1" href="{{ route('dashboard') }}">{{setting('site_title')}}</a>


    <!-- Navbar Search -->
     <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto">
        <h3 style="color: white">Welcome {{ auth()->user()->name }}!</h3>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="{{ route('user.profile') }}">Settings</a>
          {{-- <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div> --}}

          <a class="dropdown-item" href="#" data-toggle="modal" onclick="event.preventDefault();document.querySelector('#logout').submit();" data-target="#logoutModal">Logout</a>
        <form id="logout" action="{{ route('logout') }}" method="POST">
        @csrf
        </form>
        </div>
      </li>
    </ul>

  </nav>
