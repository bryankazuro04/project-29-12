@extends('dashboard.index')

@section('main-content')
  <div class="card shadow-sm">
    <form action="/dashboard/pegawai/{{ $pegawai->id }}" method="POST" enctype="multipart/form-data" class="m-3 px-4">
      @method('put')
      @csrf

      <section class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" value="{{ $pegawai->nama }}" required>
      </section>

      <section class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="textarea" name="alamat" id="alamat" cols="3" class="form-control" value="{{ $pegawai->alamat }}">
      </section>

      <section class="mb-3">
        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{ $pegawai->tempat_lahir }}">
      </section>

      <section class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ $pegawai->tanggal_lahir }}">
      </section>

      <section class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-laki" {{ ($pegawai->jenis_kelamin == 'Laki-laki') ? 'checked' : '' }}>
          <label class="form-check-label" for="jenis_kelamin1">Laki-laki</label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan" {{ ($pegawai->jenis_kelamin) == 'Perempuan' ? 'checked' : '' }}>
          <label class="form-check-label" for="jenis_kelamin2">Perempuan</label>
        </div>
      </section>

      <section class="mb-3">
        <label for="agama" class="form-label">Agama</label>
        <select class="form-select" id="agama" name="agama" aria-label="Pilih agamamu">
          <option selected disabled value="{{ $pegawai->agama }}">Pilih agama yang kamu ikuti</option>
          <option value="Islam" 
            {{ ($pegawai->agama == 'Islam') ? 'selected' : '' }}>
            Islam
          </option>

          <option value="Protestan" 
            {{ ($pegawai->agama == 'Protestan') ? 'selected' : '' }}>
            Protestan
          </option>

          <option value="Khatolik" 
            {{ ($pegawai->agama == 'Khatolik') ? 'selected' : '' }}>
            Khatolik
          </option>

          <option value="Buddha" 
            {{ ($pegawai->agama == 'Buddha') ? 'selected' : '' }}>
            Buddha
          </option>

          <option value="Hindu" 
            {{ ($pegawai->agama == 'Hindu') ? 'selected' : '' }}>
            Hindu
          </option>

          <option value="Khonghucu" 
            {{ ($pegawai->agama == 'Khonghucu') ? 'selected' : '' }}>
            Khonghucu
          </option>
        </select>
      </section>

      <section class="mb-3">
        <label for="jabatan" class="form-label">Jabatan</label>
        <select class="form-select" id="jabatan" name="jabatan" aria-label="Pilih jabatan">
          <option selected disabled value="{{ $pegawai->pegawai }}">Pilih jabatan kamu yang sesuai</option>
          <option value="Admin" 
            {{ ($pegawai->jabatan == 'Admin') ? 'selected' : '' }}>
            Admin
          </option>

          <option value="Direksi" 
            {{ ($pegawai->jabatan == 'Direksi') ? 'selected' : '' }}>
            Direksi
          </option>

          <option value="Manager" 
            {{ ($pegawai->jabatan == 'Manager') ? 'selected' : '' }}>
            Manager
          </option>

          <option value="Karyawan" 
            {{ ($pegawai->jabatan == 'Karyawan') ? 'selected' : '' }}>
            Karyawan
          </option>
        </select>
      </section>
      
      <section class="mb-3">
        <label for="picture" class="form-label">Gambar profil</label>
        <input type="hidden" name="oldImage" value="{{ $pegawai->gambar }}">
        <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="picture" name="gambar"accept=".jpg, .jpeg, .png">
        
        @error('gambar')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </section>

      <button type="submit" class="btn btn-primary mb-3">Edit data pegawai</button>
    </form>
  </div>
@endsection