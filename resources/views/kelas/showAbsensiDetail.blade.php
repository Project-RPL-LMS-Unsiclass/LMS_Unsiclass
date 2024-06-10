@extends('layouts.admin')

@section('main-content')
<div class="container">
  <article class="card mb-3">
    @if ($kelas->gambar_kelas)
    <img src="{{ asset('images/' . $kelas->gambar_kelas) }}" class="card-img" style="max-height:300px" alt="{{ $kelas->nama_kelas }}">
    @endif
    <div class="card-img-overlay ml-3 mr-3 d-flex flex-column justify-content-start mt-2">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="card-title font-weight-bold text-white mb-0">{{ $kelas->nama_kelas }}</h2>
        </div>
        <div class="card-text text-white font-weight-bold">
            <span class="mr-2"> Dibuat oleh {{ $kelas->user->name ?? 'Tidak diketahui' }} </span> | 
            <span class="mr-2"> <i class="far fa-calendar ml-2 mr-2"> </i>{{ $kelas->created_at->format('j F Y') }}</span> |  
            <span class="mr-2"> <i class="fas fa-shapes ml-2 mr-2"> </i> {{ $kelas->tingkat_kelas}}
        </div>
    </div>
    
   
    <div class="card-body ml-3 mr-3" style="z-index:1;">
        <h4 class="font-weight-bold mt-2 mb-2" style="color: rgb(191, 49, 49);">Daftar Absensi Pertemuan {{ $absensi->pertemuan }}</h4>      
        {{-- <a href="{{ route('kelas.createAbsensi', ['id' => $kelas->id]) }}" class="btn btn-light btn-md font-weight-bold" style="z-index: 1; background-color:  rgb(191, 49, 49);; color: white;">
          Create Absen
        </a> --}}
        <div>
          <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Status</th>
                <th scope="col">Feedback</th>
                <th scope="col">Waktu</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($absensi_mahasiswa as $am)
              <tr>
                <th scope="row">1</th>
                <td>{{ $am->user->name }}</td>
                <td>{{ $am->status_kehadiran }}</td>
                <td>{{ $am->feedback }}</td>
                <td>{{ $am->created_at }}</td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>
    </div>
</article>

    <!-- Tabs -->
    <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active font-weight-bold" style="color: rgb(191, 49, 49);" id="absensi-tab"  href="{{ route('kelas.show', ['id' => $kelas->id]) }}" aria-selected="false">Detail Kelas</a>
    </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link font-weight-bold" style="color: rgb(191, 49, 49);" id="materi-tab" data-toggle="tab" href="#materi" role="tab" aria-controls="materi" aria-selected="false">Materi</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link font-weight-bold" style="color: rgb(191, 49, 49);" id="tugas-tab" data-toggle="tab" href="#tugas" role="tab" aria-controls="tugas" aria-selected="false">Tugas</a>
        </li>
    </ul>
</div>
@endsection
