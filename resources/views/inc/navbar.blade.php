<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Timeline <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/profile">Profile</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="/about">About</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="/service">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/posts">Blog</a>
              </li>
              @if(Auth::check())
                <form class="form-inline active-cyan-3 active-cyan-4">
                <div class="input-group md-form form-sm form-2 pl-0">
                  <input class="form-control my-0 py-1" style="outline:none !Important;"type="text" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button type="submit" id="something">
                      <span class="input-group-text cyan lighten-2" id="basic-text1"><img src="https://img.icons8.com/ios/23/000000/search--v1.png"></span>
                    </button>
                    
                  </div>
              </div>
              </form>
              @endif
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>