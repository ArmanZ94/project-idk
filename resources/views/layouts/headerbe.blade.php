<header class="header">
    <nav class="navbar navbar-expand-lg">
           <div class="container">
            <img src="{{asset('Arifuwulogo.png')}}" alt="Arifuwu" width="200" height="45">     
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('karyawan.daftarkarya')}}">KARYAWAN</a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('user.daftaruser')}}">USER</a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('artikel.daftarartikel')}}">ARTIKEL</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('banner.daftarbanner')}}">BANNER</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('about.edit')}}">ABOUT</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('contact.edit')}}">CONTACT</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('contactus.daftarcontactus')}}">CONTACTUS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('galeri.daftargaleri')}}">GALERI</a>
                      </li>
                </ul>
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-light" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>
</header>