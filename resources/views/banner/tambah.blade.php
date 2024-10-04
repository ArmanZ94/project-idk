<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambah Banner</title>
    @include('layouts.headlinkbe')
</head>
<body class="body-color">
    @include('layouts.headerbe')
	<div class="container">
        <h1 class="text-center mt-3">Tambah Banner</h1>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form action="{{ route('banner.simpan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="text_banner" class="form-label">Text Banner</label>
                                <textarea type="text" name="text1_banner" class="form-control" id="text1_banner" rows="3" placeholder="Text1"required></textarea>
                            </div>
                            <div class="mb-3">
                                <textarea type="text" name="text2_banner" class="form-control" id="text2_banner" rows="3" placeholder="Text2"required></textarea>
                            </div>
                            <div class="mb-3">
                                <textarea type="text" name="text3_banner" class="form-control" id="text3_banner" rows="3" placeholder="Text3"required></textarea>
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