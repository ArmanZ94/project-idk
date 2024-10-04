<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome</title>
    @include('layouts.headlinkbe')
</head>
<body class="body-color">
	@include('layouts.headerbe2')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Selamat Datang</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-grid gap-2" style="grid-template-columns: 4fr 1fr;">
                            <a href="{{route('login')}}"class="btn btn-success">Login</a>
                            <a href="{{route('register')}}" class="btn btn-primary">Register</a>
                        </div>
                    </div>
                    <div class="mb-3">
                        Total Karyawan Aktif: {{$totalkaryawans }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>