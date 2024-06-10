<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
  use HasFactory;

  protected $fillable = [
    'nama_kelas', 'user_id', 'tingkat_kelas', 'deskripsi_kelas', 'gambar_kelas', 'silabus_kelas', 'archived',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function absensi()
  {
    return $this->hasMany(Absensi::class);
  }
}
