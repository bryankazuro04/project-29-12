@extends('dashboard.index')

@section('main-content')
  <div class="card shadow-sm">
    <section class="d-flex flex-column flex-md-row justify-content-center gap-5 mt-5 mx-3 mx-lg-0">
      <div class="user-count-box bg-primary bg-opacity-50">
        <p>Jumlah pegawai</p>
        <span>{{ $pegawai_count }}</span>
        <i class="fa fa-users icons"></i>
      </div>

      <div class="user-count-box bg-primary bg-opacity-50">
        <p>Jumlah user</p>
        <span>{{ $user_count }}</span>
        <i class="fa fa-user icons"></i>
      </div>
    </section>

    <section class="table-responsive col-lg-9 mx-auto pt-5">
      <table class="table table-hover text-center align-middle">
        <thead class="table-primary">
          <tr class="align-middle">
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">jabatan</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($pegawai as $pegawai)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $pegawai->nama }}</td>
              <td>{{ $pegawai->jabatan }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </section>
  </div>
@endsection