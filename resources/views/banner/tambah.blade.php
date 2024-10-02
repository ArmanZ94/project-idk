<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambah Banner</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .navbar-nav .nav-link.active{
            color: #ffffff;
        }
        .navbar-nav .nav-link:hover{
            color: #bbff00;
        }
    </style>
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
        <h1 class="text-center mt-3">Tambah Banner</h1>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card" style="color: #ffffff; background-color: #121212;">
                    <div class="card-body">
                        @if(Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form action="{{ route('banner.simpan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="note_banner" class="form-label">Note</label>
                                <input type="text" name="note_banner" class="form-control" id="note_banner" placeholder="Note Banner" required>
                            </div>
                            <div class="mb-3">
                                <label for="img_banner" class="form-label">Gambar Banner</label>
                                <input type="file" name="img_banner" class="form-control" id="img_banner">
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2" style="grid-template-columns: repeat(2, 1fr);">
                                    <button class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('banner.daftarbanner') }}" class="btn btn-md btn-secondary">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	</div>
</body>
</html>