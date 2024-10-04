<!doctype html>
<html lang="en">
<head>
    <title>Main Menu</title>
	@include('layouts.headlinkbe')
</head>
<body style="background-color:#121212; font-family: Segoe UI; color: #ffffff;">
    <header class="header" style="background-color: #303030;">
    	<nav class="navbar navbar-expand-lg">
       		<div class="container">
        		<img src="{{asset('Arifuwulogo.png')}}" alt="Arifuwu" width="200" height="45">     
          		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            		<span class="navbar-toggler-icon"></span>
          		</button>
        		<div class="collapse navbar-collapse" id="navbarSupportedContent">
            		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
              			<li class="nav-item">
                			<a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              			</li>
              			<li class="nav-item">
                			<a class="nav-link active" aria-current="page" href="{{route('karyawan.daftarkarya')}}">Daftar Karyawan</a>
              			</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="{{route('user.daftaruser')}}">Daftar User</a>
					  	</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="{{route('artikel.daftarartikel')}}">Daftar Artikel</a>
					  	</li>
						  <li class="nav-item">
							<a class="nav-link active" aria-current="page" href="{{route('banner.daftarbanner')}}">Daftar Banner</a>
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
    <div class="container">
       	<h1 class="text-center mt-3"> Welcome, {{ Auth::user()->name }}</h1>
    </div>
</body>
</html>
