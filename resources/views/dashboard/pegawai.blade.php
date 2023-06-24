@extends('dashboard.index')

@section('main-content')
  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" data-bs-theme="dark">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  
  <div class="card shadow-sm">
    <div class="row align-items-center">
      <div class="col-md-6">
        <form action="/dashboard/pegawai">
          <div class="input-group ms-3">
            <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="Search...">
            <button type="submit" class="btn btn-outline-info">Search</button>
          </div>
        </form>
      </div>

      <a href="/dashboard/pegawai/create" class="btn btn-outline-info m-3 ms-auto me-4" role="button" style="width: max-content">Tambah Pegawai</a>
    </div>
    
    <section class="table-responsive px-2">
      <div class="d-flex justify-content-end">
        {{ $pegawai->links() }}
      </div>

      <table class="table table-hover text-center align-middle">
        <thead>
          <tr class="align-middle">
            <th scope="col">Profil</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col" style="width: 8rem">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">jabatan</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        @if ($pegawai->count())
          <tbody>
            @foreach ($pegawai as $pegawai)
              <tr>
                <td><img src="{{ ($pegawai->gambar == 'user.png') ? '/assets/images/profile/' . $pegawai->gambar : '/' . $pegawai->gambar }}" alt="{{ $pegawai->nama }}" class="w-50 rounded-circle image-profile" draggable="false"></td>
                <td>{{ $pegawai->nama }}</td>
                <td>{{ $pegawai->alamat }}</td>
                <td>{{ $pegawai->tempat_lahir }}</td>
                <td>{{ $pegawai->tanggal_lahir }}</td>
                <td>{{ $pegawai->jenis_kelamin }}</td>
                <td>{{ $pegawai->agama }}</td>
                <td>{{ $pegawai->jabatan }}</td>
                <td>
                  <ul class="list-unstyled d-flex gap-2 justify-content-center mb-0">
                    <li>
                      <a href="/dashboard/pegawai/{{ $pegawai->id }}/edit" class="warning">
                        <i class="fa fa-edit"></i>
                      </a>
                    </li>

                    <li>
                      <form action="/dashboard/pegawai/{{ $pegawai->id }}" method="post">
                          @method('delete')
                          @csrf
                          <button class="danger" onclick="return confirm('Apakah ingin menghapus data pegawai ini?')">
                            <i class="fa fa-trash"></i>
                          </button>
                      </form>
                    </li>
                  </ul>
                </td>
              </tr>
            @endforeach
          </tbody>
        @else
          <tr>
            <td colspan="9">Data pegawai tidak ditemukan</td>
          </tr>
        @endif
      </table>
    </section>
  </div>
@endsection