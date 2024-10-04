<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar User</title>
	@include('layouts.headlinkbe')
</head>
<body class="body-color">
	@include('layouts.headerbe')
	<div class="container">
		<h1 class="text-center mt-3">Daftar User</h1>	
		<table class="table table-bordered text-left mt-4" style="vertical-align: middle; white-space: nowrap; color:#ffffff; width:100%;">
			<thead style="vertical-align: middle;">
				<tr>
					<th style="width:2%">ID</th>
					<th>NAMA</th>
					<th>EMAIL</th>
					<th>ROLE</th>
					<th style="width:11%">
						<a href="https://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=project-idk&table=users"class="btn btn-success text-center" style="display: flex;">phpMyAdmin</a>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
						@if(optional($user)->role_id == 1)
							unverified
						@elseif(optional($user)->role_id == 2)
							Admin
						@elseif(optional($user)->role_id == 3)
							User
						@else
							---
						@endif
					</td>	
					<td>
						<form onsubmit="return confirm('Apakah Anda Yakin ?');"
							action="{{ route('user.hapus', $user->id) }}" method="POST">
							<a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger">Hapus</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{ $users->links('pagination::bootstrap-5') }}
	</div>
</body>
</html>