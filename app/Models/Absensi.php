<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
	protected $table = 'absensis';
	//protected $fillable = ['nama','jabatan_id','ruangan_id'];

	public function gaji()
	{
		return $this->belongsTo(Gaji::class);
	}
}
