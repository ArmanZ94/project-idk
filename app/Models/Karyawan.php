<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
	protected $table = 'karyawans';
	protected $fillable = ['nama','jabatan_id','ruangan_id'];

	public function jabatan()
	{
		return $this->belongsTo(Jabatan::class, 'jabatan_id');
	}
	public function ruangan()
	{
		return $this->belongsTo(Ruangan::class,'ruangan_id');
	}
}
