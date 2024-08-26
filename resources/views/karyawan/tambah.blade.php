<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambah Karyawan</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
        .header {
            background-color: #303030;
        }
		.navbar-default .navbar-nav > li > a {
			color: #ffffff;
			padding-top:16px;
            padding-bottom: 15px;
		}
		.navbar-default .navbar-nav > li > a:hover {
			color: #bbff00;
        }
		.navbar-default {
			background-color: #303030;
			border-color: #303030;
		}
		.navbar-header {
			padding-top: 4px;
            padding-bottom: 4px;
		}
    </style>
</head>
<body style="background-color:#121212; font-family: Segoe UI">
	<header class="header">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand -->
                <div class="navbar-header">
					 <img src="https://cdn.discordapp.com/attachments/602152146850283540/1272402233514000415/20240812_105147.png?ex=66bad86c&is=66b986ec&hm=ce2be429cd14776db615e997d03be73a92514bacc9973f320560f98d0fd5d1d6&" alt="Arifuwu" width="200" height="45"> 
                </div>
                <!-- Navigation links -->	
                <div>
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('karyawan.daftarkarya')}}">Daftar Karyawan</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
	<h1 class="text-center" style="color:#ffffff;">Tambah Karyawan</h1>
	<div class="container">
		<form action="{{ route('karyawan.simpan') }}" method="POST">
			@csrf
			<div class="mb-3">
				<label for="nama" style="color:#ffffff;">Nama</label>
                <input type="text" name="nama" value="{{ old('nama') }}" required>
            </div>
            <button type="submit" class="btn btn-md btn-primary">Save</button>
            <a href="{{ route('karyawan.daftarkarya') }}" class="btn btn-md btn-secondary">back</a>
        </form>
	</div>
</body>
</html>