<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Jabatan;
use App\Models\Ruangan;
use App\Models\Gaji;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function u_daftar(Request $request)
	{
        $sortBy = $request->query('sort_by', 'id'); // default sort by 'id'
        $order = $request->query('order', 'asc'); // default order 'asc'

        $users = User::orderBy($sortBy, $order)->paginate(7);
		//$users = User::latest('id')->paginate(7);

        return view('user.daftaruser', compact('users'));
	}
	
	public function u_hapus($id)
    {
		$user = User::findOrFail($id);
        $user->delete();
        return redirect()
            ->route('user.daftaruser');
    }
	
	public function u_edit($id)
    {
		$user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function u_update(Request $request, $id)
    {
        $request->validate([
            'role_id' => 'required|integer',
        ]);

		$user = User::findOrFail($id);

        $user->update([
            'role_id' => $request->role_id,
        ]);

        return redirect()
            ->route('user.daftaruser');
    }
}
