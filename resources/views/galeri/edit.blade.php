<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Galeri</title>
    @include('layouts.headlinkbe')
</head>
<body class="body-color">
    @include('layouts.headerbe')
	<div class="container">
        <h1 class="text-center mt-3">Edit Galeri</h1>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="img_galeri" class="form-label">Gambar Galeri</label>
                                <input type="file" name="img_galeri" class="form-control" id="img_galeri" required>
                            </div>
                            <div class="mb-3">
                                <p>Gambar saat ini:</p>
                                <img src="{{ asset('storage/' . $galeri->img_galeri) }}" alt="Gambar Galeri" width="150">
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2" style="grid-template-columns: repeat(2, 1fr);">
                                    <button class="btn btn-primary">Update</button>
                                    <a href="{{ route('galeri.daftargaleri') }}" class="btn btn-md btn-secondary">Kembali</a>
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