<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

	protected static function booted()
    {
        static::creating(function ($model) {
			if (is_null($model->user_id)) {
            	$model->user_id = Auth::id(); // Set user_id from authenticated user
			}
        });
    }
}
