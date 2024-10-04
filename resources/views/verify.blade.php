<!DOCTYPE html>
<html lang="en">
<head>
	<title>Verify</title>
    @include('layouts.headlinkbe')
</head>
<body class="body-color">
	@include('layouts.headerbe2')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title text-center">Menunggu Verifikasi</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <form action="{{ route('logout') }}" method="POST" class="d-grid gap-2">
                            @csrf
                            @method('DELETE')
                            <h5 class="text-center">Anda akan otomatis masuk jika sudah diverifikasi.</h5>
                            <button class="btn btn-light" type="submit">Logout</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>