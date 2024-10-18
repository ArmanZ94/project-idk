<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;
	protected $table = 'contactus';
	protected $fillable = ['isi_contact_us','email_contact_us','nama_contact_us'];
	//protected $fillable = ['nama','jabatan_id','ruangan_id'];
}
