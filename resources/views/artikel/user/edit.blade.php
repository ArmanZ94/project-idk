<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Artikel</title>
    @include('layouts.headlinkbe')
</head>
<body class="body-color">
    @include('layouts.headerbeuser')
	<div class="container">
        <h1 class="text-center mt-3">Edit Artikel</h1>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form action="{{ route('artikel.user.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="judul_artikel" class="form-label">Judul</label>
                                <input type="text" name="judul_artikel" class="form-control" id="judul_artikel" value="{{ old('judul_artikel', $artikel->judul_artikel) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="img_artikel" class="form-label">Gambar Artikel</label>
                                <input type="file" name="img_artikel" class="form-control" id="img_artikel">
                            </div>
                            {{--<div class="mb-3">
                                <p>Gambar saat ini:</p>
                                <img src="{{ asset('storage/' . $artikel->img_artikel) }}" alt="Gambar Artikel" width="150">
                            </div>--}}
                            <div class="mb-3">
                                <textarea name="isi_artikel" id="isi_artikel" placeholder="Isi Artikel"> {{ $artikel->isi_artikel ?? '' }}</textarea>
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2" style="grid-template-columns: repeat(2, 1fr);">
                                    <button class="btn btn-primary">Update</button>
                                    <a href="{{ route('artikel.user.daftarartikel') }}" class="btn btn-md btn-secondary">Kembali</a>
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