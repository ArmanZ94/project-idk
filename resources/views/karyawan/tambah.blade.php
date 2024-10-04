<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambah Karyawan</title>
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
        <h1 class="text-center mt-3">Tambah Karyawan</h1>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card" style="color: #ffffff; background-color: #121212;">
                    <div class="card-body">
                        @if(Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form action="{{ route('karyawan.simpan') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="nama karyawan" required>
                            </div>
                            <div class="mb-3">
                                <label for="jabatan_id" class="form-group">Jabatan</label>
                                <select type="integer" name="jabatan_id" class="form-control" id="jabatan_id" required>
                                    <option value="" disabled selected>--pilih salah satu--</option>
                                    <option value="1">1. Manager</option>
                                    <option value="2">2. TechSupport</option>
                                    <option value="3">3. Worker</option>
                                    <option value="4">4. Orang</option>
                                </select>
                            </div> 
                            <div class="mb-3">
                                <label for="ruangan_id" class="form-group">Ruangan</label>
                                <select type="integer" name="ruangan_id" class="form-control" id="ruangan_id" required>
                                    <option value="" disabled selected>--pilih salah satu--</option>
                                    <option value="1">1. Ruang Manager</option>
                                    <option value="2">2. Ruang IT</option>
                                    <option value="3">3. Ruang Produksi</option>
                                    <option value="4">4. Ruang Kantor</option>
                                </select>
                            </div>   
                            <div class="mb-3">
                                <label for="gaji_pokok" class="form-label">Gaji</label>
                                <input type="integer" name="gaji_pokok" class="form-control" id="gaji_pokok" placeholder="nominal gaji" required>
                            </div>   
                            <div class="mb-3">
                                <div class="d-grid gap-2" style="grid-template-columns: repeat(2, 1fr);">
                                    <button class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('karyawan.daftarkarya') }}" class="btn btn-md btn-secondary">Kembali</a>
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