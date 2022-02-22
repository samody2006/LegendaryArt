
        <header class="site-navbar py-3" role="banner">

                <div class="container-fluid">
                  <div class="row align-items-center">

                    <div class="col-6 col-xl-2" data-aos="fade-down">
                    <h1 class="mb-0"><a href="{{ route('homepage') }}"
                    class="text-black h2 mb-0">{{setting('site_title')}}</a></h1>
                    </div>
                    <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
                      <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                            <li class="{{ Request::is('/') ? 'active' : '' }}">
                                <a href="{{ route('homepage') }}">Home</a>
                            </li>

                            <li class="{{ Request::is('service') ? 'active' : '' }}">
                                <a href="{{ route('service') }}">Services</a>
                            </li>
                            <li class="{{ Request::is('about') ? 'active' : '' }}">
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="{{ Request::is('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>

{{--                          @guest--}}
{{--                      <li><a href="{{ route('registerr') }}">Register</a></li>--}}
{{--                      <li><a href="{{ route('login') }}">Login</a></li>--}}

{{--                          @endguest--}}
                          @auth
                          <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                          <li class="has-children">
                              <a href="{{ route('user.profile') }}">Profile</a>
                              <ul class="dropdown">
                                <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit()">Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                      @csrf
                              </form>

                                  </li>
                              </ul>
                            </li>

                          @endauth



                        </ul>
                      </nav>
                    </div>


                  </div>
                </div>

              </header>
