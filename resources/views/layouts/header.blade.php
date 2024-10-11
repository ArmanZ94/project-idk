<header class="section page-header rd-navbar-transparent-wrap">
    <!--RD Navbar-->
    <div class="rd-navbar-wrap">
      <nav class="rd-navbar rd-navbar-transparent" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="44px" data-xl-stick-up-offset="44px" data-xxl-stick-up-offset="44px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
        <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
        <div class="rd-navbar-aside-outer rd-navbar-collapse">
          <div class="rd-navbar-aside">
            <div class="rd-navbar-info">
              <div class="icon novi-icon mdi mdi-phone"></div><a href="tel:#">+1 (800) 123 1234</a>
            </div>
            <ul class="list-lined">
              <li><a href="{{route('login')}}">Log in</a></li>
              <li><a href="{{route('register')}}">Create an account</a></li>
            </ul>
          </div>
        </div>
        <div class="rd-navbar-main-outer">
          <div class="rd-navbar-main-inner">
            <div class="rd-navbar-main">
              <!--RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!--RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!--RD Navbar Brand-->
                <div class="rd-navbar-brand">
                  <!--Brand--><a class="brand" href="{{route('landing')}}"><img class="brand-logo-light" src="/images/logo-default-293x44.png"/><img class="brand-logo-dark" src="/images/logo-inverse-310x44.png"/></a>
                </div>
              </div>
              <div class="rd-navbar-main-element">
                <div class="rd-navbar-nav-wrap">
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('landing')}}">Home</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('article')}}">Article</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('gallery')}}">Gallery</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('typography')}}">Typography</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('contacts')}}">Contacts</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div class="rd-navbar-bg novi-background bg-image" style="background-image: url(/images/bg-navbar.jpg)"></div>
</header>