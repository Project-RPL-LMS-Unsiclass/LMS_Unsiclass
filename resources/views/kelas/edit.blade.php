@extends('layouts.admin')

@section('main-content')
<div class="container">
    <h1 class="h3 mb-4 font-weight-bold" style="color: rgb(191, 49, 49);">{{ __('Edit Kelas') }}</h1>

    <form action="{{ route('kelas.update', ['id' => $kelas->id]) }}" method="POST" enctype="multipart/form-data" class="font-weight-bold px-4 py-4 mb-4" style="color: rgb(191, 49, 49); background-color:white;">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_kelas">Nama Kelas</label>
            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="{{ old('nama', $kelas->nama_kelas) }}" style="color: rgb(191, 49, 49);" required>
        </div>
        <div class="form-group">
            <label for="tingkat_kelas">Tingkat Kelas</label>
            <input type="text" class="form-control" id="tingkat_kelas" name="tingkat_kelas" value="{{ old('tingkat', $kelas->tingkat_kelas) }}" style="color: rgb(191, 49, 49);" required>
        </div>
        <div class="form-group">
            <label for="deskripsi_kelas">Deskripsi</label>
            <textarea class="form-control" id="deskripsi_kelas" name="deskripsi_kelas" rows="3" style="color: rgb(191, 49, 49);" required>{{ old('deskripsi', $kelas->deskripsi_kelas) }}</textarea>
        </div>
        <div class="form-group">
            <label for="gambar_kelas">Sampul</label>
            <div class="input-group">
                <input type="file" class="form-control form-control-file" id="gambar_kelas" name="gambar_kelas" style="color: rgb(191, 49, 49);">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="fas fa-image" style="color: rgb(191, 49, 49);"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="silabus_kelas">Silabus</label>
            <div class="input-group">
                <input type="file" class="form-control form-control-file" id="silabus_kelas" name="silabus_kelas" accept="application/pdf" style="color: rgb(191, 49, 49);">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="far fa-file-pdf" style="color: rgb(191, 49, 49);"></i>
                    </span>
                </div>
            </div>
        </div>   
        <div class="row justify-content-center">    
            <button type="submit" class="btn btn-light btn-md font-weight-bold mt-3 mb-3" style="color: white ; background-color: rgb(191, 49, 49);">Simpan Perubahan</button>
        </div> 
    </form>
</div>
@endsection
