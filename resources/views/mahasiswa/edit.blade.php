@extends('layouts.app')

@section('content')
<h1>Edit Mahasiswa</h1>

<div class="card">
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-input" value="{{ $mahasiswa->nama }}" required>
        </div>
        <div class="form-group">
            <label for="nim" class="form-label">NIM:</label>
            <input type="text" name="nim" id="nim" class="form-input" value="{{ $mahasiswa->nim }}" required>
        </div>
        <div class="form-group">
            <label for="jurusan" class="form-label">Jurusan:</label>
            <input type="text" name="jurusan" id="jurusan" class="form-input" value="{{ $mahasiswa->jurusan }}" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-input" value="{{ $mahasiswa->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection