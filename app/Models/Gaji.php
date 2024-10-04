<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;
	protected $table = 'gajis';
	protected $fillable = ['gaji_pokok','note_gaji','karyawan_id'];

	public function karyawan()
	{
		return $this->belongsTo(Karyawan::class);
	}
}
