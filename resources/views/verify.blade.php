<!DOCTYPE html>
<html lang="en">
<head>
	<title>Verify</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="background-color:#121212; font-family: Segoe UI">
	<header class="header" style="background-color: #303030;">
        <nav class="navbar navbar-default">
            <div class="row mx-auto text-center">
                <a href=#>
				    <img src="{{asset('Arifuwulogo.png')}}" alt="Arifuwu" width="200" height="45">     
                </a>
            </div>
        </nav>
    </header>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card" style="color: #ffffff; background-color: #121212;">
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