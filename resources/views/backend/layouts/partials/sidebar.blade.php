
      <div id="wrapper">

            <!-- Sidebar -->
            <ul class="sidebar navbar-nav">
              <li class="{{ Request::is('/admin') ? 'active' : '' }} nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              @permission('create-albums')

              <li class="{{ Request::is('admin/album') ? 'active' : '' }} nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-fw fa-folder"></i>
                      <span>Albums</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="{{ route('album.create') }}">Add New Album</a>
                    <a class="dropdown-item" href="{{ route('album.index') }}">All Albums</a>
                    </div>
                  </li>

                  @endpermission

                <li class="{{ Request::is('admin/photo') ? 'active' : '' }} nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-fw fa-folder"></i>
                          <span>Photos</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="{{ route('photo.create') }}">Add New Photo</a>
                        <a class="dropdown-item" href="{{ route('photo.index') }}">All Photos</a>
                        </div>
                      </li>
                      @role('admin|superadministrator')

                <li class="{{ Request::is('admin/team') ? 'active' : '' }} nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-fw fa-folder"></i>
                              <span>Teams</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                            <a class="dropdown-item" href="{{ route('team.create') }}">Add New Team</a>
                            <a class="dropdown-item" href="{{ route('team.index') }}">All Teams</a>
                            </div>
                          </li>

                <li class="{{ Request::is('admin/service') ? 'active' : '' }} nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-fw fa-folder"></i>
                                  <span>Service</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                <a class="dropdown-item" href="{{ route('service.create') }}">Add New Service</a>
                                <a class="dropdown-item" href="{{ route('service.index') }}">All Services</a>
                                </div>
                              </li>

                <li class="{{ Request::is('admin/message') ? 'active' : '' }} nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Message</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="{{ route('message.index') }}">All Message</a>
                    </div>
                </li>

                <li class="{{ Request::is('admin/contactinfo') ? 'active' : '' }} nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-fw fa-folder"></i>
                                      <span>Contact Info</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                    <a class="dropdown-item" href="{{ route('contactinfo.create') }}">Add New Info</a>
                                    <a class="dropdown-item" href="{{ route('contactinfo.index') }}">All Infos</a>
                                    </div>
                                  </li>
                    @endrole


                    @role('superadministrator')

                <li class="{{ Request::is('admin/permission') ? 'active' : '' }} nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-fw fa-folder"></i>
                            <span>Permission</span>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                          <a class="dropdown-item" href="{{ route('permission.create') }}">Add New Permission</a>
                          <a class="dropdown-item" href="{{ route('permission.index') }}">All Permission</a>
                          </div>
                        </li>

                            @endrole

                            @role('superadministrator')

                <li class="{{ Request::is('admin/role') ? 'active' : '' }} nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-fw fa-folder"></i>
                                    <span>Role</span>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                  <a class="dropdown-item" href="{{ route('role.create') }}">Add New Role</a>
                                  <a class="dropdown-item" href="{{ route('role.index') }}">All Roles</a>
                                  </div>
                                </li>

                <li class="{{ Request::is('admin/settings') ? 'active' : '' }} nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#"
                                    id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-fw fa-folder"></i>
                                      <span>Settings</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                    <a class="dropdown-item" href="{{ route('settings.create') }}">Add New Setting</a>
                                    <a class="dropdown-item" href="{{ route('settings.index') }}">All Settings</a>
                                    </div>
                                  </li>


                                    @endrole

                                    @role('superadministrator')

                <li class="{{ Request::is('admin/user') ? 'active' : '' }} nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-fw fa-folder"></i>
                                            <span>Users</span>
                                          </a>
                                          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                          <a class="dropdown-item" href="{{ route('user.create') }}">Add New User</a>
                                          <a class="dropdown-item" href="{{ route('user.index') }}">All Users</a>
                                          </div>
                                        </li>

                                            @endrole
                                  </ul>
