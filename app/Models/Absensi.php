<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
  use HasFactory;

  protected $fillable = [
    'kelas_id', 'pertemuan',
  ];

  public function absensi()
  {
    return $this->belongsTo(Absensi::class);
  }

  public function absensiMahasiswa()
  {
    return $this->hasMany(AbsensiMahasiswa::class);
  }

  public function kelas()
  {
    return $this->belongsTo(Kelas::class);
  }
}
