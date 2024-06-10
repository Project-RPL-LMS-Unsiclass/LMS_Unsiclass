<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Absensi;
use App\Models\AbsensiMahasiswa;
use App\Models\User;

class MahasiswaController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('mahasiswa.index', ['title' => 'Dashboard Mahasiswa']);
  }

  public function indexAbsensi()
  {

    $users = User::all();
    $kelas = Kelas::all();
    $absensi = Absensi::all();
    return view('mahasiswa.indexAbsensi', ['title' => 'Absensi Mahasiswa', 'users' => $users, 'kelas' => $kelas, 'absensi' => $absensi]);
  }

  public function storeAbsensi(Request $request)
  {
    $request->validate([
      'user_id' => 'required|exists:users,id',
      'kelas_id' => 'required|exists:kelas,id',
      'absensi_id' => 'required|exists:absensis,id',
      'status_kehadiran' => 'required|string|max:255',
      'feedback' => 'required|string|max:255',
    ]);

    $absensi_mahasiswa = new AbsensiMahasiswa();
    $absensi_mahasiswa->absensi_id = $request->absensi_id;
    $absensi_mahasiswa->user_id = $request->user_id;
    $absensi_mahasiswa->status_kehadiran = $request->status_kehadiran;
    $absensi_mahasiswa->feedback = $request->feedback;

    $absensi_mahasiswa->save();

    return redirect()->back()->with('success', 'Absensi berhasil disimpan.');
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
