<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
	protected $table = 'abouts';
	protected $fillable = ['isi_about'];
	//protected $fillable = ['nama','jabatan_id','ruangan_id'];
}
