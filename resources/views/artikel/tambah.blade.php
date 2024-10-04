<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambah Artikel</title>
    @include('layouts.headlinkbe')
</head>
<body class="body-color">
    @include('layouts.headerbe')
	<div class="container">
        <h1 class="text-center mt-3">Tambah Artikel</h1>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form action="{{ route('artikel.simpan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="judul_artikel" class="form-label">Judul</label>
                                <input type="text" name="judul_artikel" class="form-control" id="judul_artikel" placeholder="judul artikel" required>
                            </div>
                            <div class="mb-3">
                                <label for="isi_artikel" class="form-label">Isi</label>
                                <textarea type="text" name="isi_artikel" class="form-control" id="isi_artikel" rows="5" placeholder="isi artikel" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="img_artikel" class="form-label">Gambar</label>
                                <input type="file" name="img_artikel" class="form-control" id="img_artikel">
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2" style="grid-template-columns: repeat(2, 1fr);">
                                    <button class="btn btn-primary">Simpan</button>
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