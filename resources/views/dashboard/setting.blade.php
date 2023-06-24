@extends('dashboard.index')

@section('main-content')
  @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" data-bs-theme="dark">
      {{ session('message') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="card shadow-sm pt-4">
    <form action="/dashboard/user/setting/{{ auth()->user()->id }}" method="POST" class="ms-lg-4 mb-3">
      @method('put')
      @csrf
      <section class="form-group row mb-3">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>

        <div class="col-sm-8">
          <input type="text" class="form-control w-75" id="nama" name="name" value="{{ auth()->user()->name }}">
        </div>
      </section>

      <section class="form-group row mb-3">
        <label for="email" class="col-sm-2 col-form-label">E-Mail</label>

        <div class="col-sm-8">
          <input type="email" class="form-control w-75" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
        </div>
      </section>

      <div class="mt-4">
        <a href="{{ route('password.edit') }}" title="Ubah Password"><small>Change Password</small></a>

        <button type="submit" class="mt-2 d-block btn btn-primary">Simpan Perubahaan</button>
      </div>
    </form>
  </div>
@endsection