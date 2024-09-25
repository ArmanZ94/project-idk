<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
	protected $table = 'artikels';
	protected $fillable = ['judul_artikel','isi_artikel','img_artikel'];
	//protected $fillable = ['nama','jabatan_id','ruangan_id'];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
