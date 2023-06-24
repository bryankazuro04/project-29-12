@extends('dashboard.index')

@section('main-content')
  @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" data-bs-theme="dark">
      {{ session('message') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="card shadow-sm">
    <h1 class="fs-2 my-3 px-4">Change Password</h1>

    <form action="{{ route('password.update') }}" method="POST" class="mb-3 px-4">
      @method('put')
      @csrf
      <section class="form-group row mb-3">
        <label for="current_password" class="col-sm-3 col-form-label">Current Password</label>

        <div class="col-sm-8">
          <input type="password" class="form-control w-75" id="current_password" name="current_password">
          @error('current_password')
              <small class="text-danger mt-2 text-sm">{{ $message }}</small>
          @enderror
        </div>
      </section>

      <section class="form-group row mb-3">
        <label for="passwpord" class="col-sm-3 col-form-label">New Password</label>

        <div class="col-sm-8">
          <input type="password" class="form-control w-75" id="password" name="password">
          @error('password')
              <small class="text-danger mt-2 text-sm">{{ $message }}</small>
          @enderror
        </div>
      </section>

      <section class="form-group row mb-3">
        <label for="password_confirmation" class="col-sm-3 col-form-label">Confirm Password</label>

        <div class="col-sm-8">
          <input type="password" class="form-control w-75" id="password_confirmation" name="password_confirmation">
          @error('password_confirmation')
              <small class="text-danger mt-2 text-sm">{{ $message }}</small>
          @enderror
        </div>
      </section>

      <button type="submit" class="mt-2 d-block btn btn-primary">Ubah Password</button>
    </form>
  </div>
@endsection