@extends('dashboard.index')

@section('main-content')
  <div class="card shadow-sm">
    <form action="/dashboard/pegawai" method="POST" class="m-3 px-4" enctype="multipart/form-data">
      @csrf

      <section class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama">

        @error('nama')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </section>

      <section class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea name="alamat" id="alamat" cols="30" class="form-control @error('alamat') is-invalid @enderror"></textarea>

        @error('alamat')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </section>

      <section class="mb-3">
        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir">

        @error('tempat_lahir')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </section>

      <section class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir">

        
        @error('tanggal_lahir')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </section>

      <section class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-laki">
          <label class="form-check-label" for="jenis_kelamin1">Laki-laki</label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan">
          <label class="form-check-label" for="jenis_kelamin2">Perempuan</label>
        </div>
      </section>

      <section class="mb-3">
        <label for="agama" class="form-label">Agama</label>
        <select class="form-select @error('agama') is-invalid @enderror" id="agama" name="agama" aria-label="Pilih agamamu">
          <option selected disabled>Pilih agama yang kamu ikuti</option>
          <option value="Islam">Islam</option>
          <option value="Protestan">Protestan</option>
          <option value="Khatolik">Khatolik</option>
          <option value="Buddha">Buddha</option>
          <option value="Hindu">Hindu</option>
          <option value="Khonghucu">Khonghucu</option>
        </select>
        
        @error('agama')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </section>

      <section class="mb-3">
        <label for="jabatan" class="form-label">Jabatan</label>
        <select class="form-select @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" aria-label="Pilih Jabatan">
          <option selected disabled>Pilih jabatan kamu yang sesuai</option>
          <option value="Admin">Admin</option>
          <option value="Direksi">Direksi</option>
          <option value="Manager">Manager</option>
          <option value="Karyawan">Karyawan</option>
        </select>

        @error('jabatan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </section>

      <section class="mb-3">
        <label for="picture" class="form-label">Gambar profil</label>
        <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="picture" name="gambar"accept=".jpg, .jpeg, .png">
        
        @error('gambar')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </section>

      <button type="submit" class="btn btn-primary mb-3">Tambah Data</button>
    </form>
  </div>
@endsection