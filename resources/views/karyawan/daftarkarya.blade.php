<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Karyawan</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>

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
		.container-fluid {
			  padding-right: 100px;
			  padding-left: 100px;
			  margin-right: auto;
			  margin-left: auto;
		}
	</style>
</head>
<body style="background-color:#121212; font-family: Segoe UI">
	<header class="header" style="background-color: #303030;">
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
	<h1 class="text-center" style="color:#ffffff;">Daftar Karyawan</h1>
	<div class="container-fluid">
		<a href="{{route('karyawan.tambah')}}"class="btn btn-md btn-success mb-10 float-end">Tambah</a>
	
		<table class="table table-bordered mt-1 text-left" style="color:#ffffff; width:100%;">
			<thead>
				<tr>
					<th style="width:2%">ID</th>
					<th>NAMA</th>
					<th style="width:9%">Aksi</th>
				</tr>
			</thead>	
			<tbody>
				@foreach($karyawans as $karyawan)
				<tr>
					<td>{{ $karyawan->id }}</td>
					<td>{{ $karyawan->nama }}</td>
					<td>
						<form onsubmit="return confirm('Apakah Anda Yakin ?');"
							action="{{ route('karyawan.hapus', $karyawan->id) }}" method="POST">

							<a href="{{ route('karyawan.edit', $karyawan->id) }}"
							class="btn btn-sm btn-primary">Edit</a>

							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-sm btn-danger">Hapus</button>
						</form>

					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>