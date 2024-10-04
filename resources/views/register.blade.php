<!doctype html>
<html lang="en">
<head>
    <title>Register Page</title>
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
                    <h1 class="card-title">Register</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="example" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="example@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2" style="grid-template-columns: 4fr 1fr;">
                                <button class="btn btn-primary">Register</button>
                                <a href="{{route('login')}}"class="btn btn-light">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
