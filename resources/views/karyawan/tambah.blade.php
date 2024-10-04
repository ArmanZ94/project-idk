<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambah Karyawan</title>
    @include('layouts.headlinkbe')
</head>
<body class="body-color">
    @include('layouts.headerbe')
	<div class="container">
        <h1 class="text-center mt-3">Tambah Karyawan</h1>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
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