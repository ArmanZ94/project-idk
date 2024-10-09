<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit About</title>
    @include('layouts.headlinkbe')
</head>
<body class="body-color">
    @include('layouts.headerbe')
	<div class="container">
        <h1 class="text-center mt-3">Edit About</h1>
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <!-- Tambahkan textarea yang akan digunakan sebagai WYSIWYG editor -->
                            <textarea id="isi_about" name="isi_about"> {{ $about->isi_about ?? '' }} </textarea>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2" style="grid-template-columns: repeat(2, 1fr);">
                                <button class="btn btn-primary">Update</button>
                                <a href="{{ route('about.edit') }}" class="btn btn-md btn-secondary">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
</body>
</html>