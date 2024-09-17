<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
	protected $table = 'karyawans';
	protected $fillable = ['nama','jabatan_id','ruangan_id'];
	//protected $fillable = ['nama','jabatan_id','ruangan_id'];

	public function gaji()
	{
		return $this->hasOne(Gaji::class);
	}
	public function ruangan()
	{
		return $this->belongsTo(Ruangan::class);
	}
	public function jabatan()
	{
		return $this->belongsTo(Jabatan::class);
	}
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
