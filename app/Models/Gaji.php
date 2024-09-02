<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;
	protected $table = 'gajis';
	protected $fillable = ['gaji_pokok','note_gaji'];
	//protected $fillable = ['nama','jabatan_id','ruangan_id'];

/*	public function jabatan()
	{
		return $this->belongsTo(Jabatan::class);
	}
	public function ruangan()
	{
		return $this->belongsTo(Ruangan::class);
	} */
}
