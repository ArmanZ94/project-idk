<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
	protected $table = 'banners';
	protected $fillable = ['note_banner','img_banner'];
	//protected $fillable = ['nama','jabatan_id','ruangan_id'];
}
