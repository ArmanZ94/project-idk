<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Artikel</title>
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
        <h1 class="text-center mt-3">Edit Artikel</h1>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card" style="color: #ffffff; background-color: #121212;">
                    <div class="card-body">
                        @if(Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="judul_artikel" class="form-label">Judul</label>
                                <input type="text" name="judul_artikel" class="form-control" id="judul_artikel" value="{{ old('judul_artikel', $artikel->judul_artikel) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="isi_artikel" class="form-label">Isi Artikel</label>
                                <textarea name="isi_artikel" class="form-control" id="isi_artikel" rows="5" required>{{old('isi_artikel', $artikel->isi_artikel)}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="img_artikel" class="form-label">Gambar Artikel</label>
                                <input type="file" name="img_artikel" class="form-control" id="img_artikel">
                            </div>
                            <div class="mb-3">
                                <p>Gambar saat ini:</p>
                                <img src="{{ asset('storage/images/artikel/' . $artikel->img_artikel) }}" alt="Gambar Artikel" width="150">
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2" style="grid-template-columns: repeat(2, 1fr);">
                                    <button class="btn btn-primary">Update</button>
                                    <a href="{{ route('artikel.daftarartikel') }}" class="btn btn-md btn-secondary">Kembali</a>
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