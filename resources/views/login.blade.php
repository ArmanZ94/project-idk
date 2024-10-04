<!doctype html>
<html lang="en">
<head>
    <title>Login Page</title>
    @include('layouts.headlinkbe')
</head>
<body style="background-color: #121212; font-family: Segoe UI">
    <header class="header" style="background-color: #303030;">
        <nav class="navbar navbar-default">
            <div class="row mx-auto text-center">
                <a href="{{route('landing')}}">
			    	<img src="{{asset('Arifuwulogo.png')}}" alt="Arifuwu" width="200" height="45">     
                </a>
            </div>
        </nav>
    </header>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card" style="color: #ffffff; background-color: #121212;">
                <div class="card-header">
                    <h1 class="card-title">Login</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="nama@contoh.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2" style="grid-template-columns: 4fr 1fr;">
                                <button class="btn btn-success">Login</button>
                                <a href="{{route('register')}}"class="btn btn-light">Register</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
