<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit User</title>
	@include('layouts.headlinkbe')
</head>
<body class="body-color">
    @include('layouts.headerbe')
	<div class="container">
        <h1 class="text-center mt-3">Edit User</h1>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form action="{{ route('user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="role_id" class="form-group">Role_ID</label>
                                <select type="integer" name="role_id" class="form-control" id="role_id" required>
                                    <option value="" disabled selected>--pilih salah satu--</option>
                                    <option value="1">1. unverified</option>
                                    <option value="2">2. Admin</option>
                                    <option value="3">3. User</option>
                                </select>
                            </div>     
                            <div class="mb-3">
                                <div class="d-grid gap-2" style="grid-template-columns: repeat(2, 1fr);">
                                    <button class="btn btn-primary">Update</button>
                                    <a href="{{ route('user.daftaruser') }}" class="btn btn-md btn-secondary">Kembali</a>
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