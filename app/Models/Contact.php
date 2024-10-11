<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
	protected $table = 'contacts';
	protected $fillable = ['isi_contact'];
	//protected $fillable = ['nama','jabatan_id','ruangan_id'];
}
