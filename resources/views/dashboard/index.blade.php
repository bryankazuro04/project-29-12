<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- Required Meta Tag --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Icon logo --}}
    <link rel="shortcut icon" href="/assets/images/icons/aratek-logo.png" type="image/x-icon">

    {{-- Bootstrap Style --}}
    <link rel="stylesheet" href="/assets/styles/bootstrap.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}

    {{-- Font Awesome Icon File --}}
    <link rel="stylesheet" href="/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    {{-- Style File --}}
    <link rel="stylesheet" href="/assets/styles/style.css">
    
    <title>{{ $title }} | Aratek</title>
  </head>

  <body data-bs-theme="dark">
    <header>
      <nav class="navbar bg-primary-subtle shadow-sm" data-bs-theme="dark">
        <div class="container-fluid">
          <h1 class="fs-2 brand-title mb-0">{{ $title }}</h1>
          <a class="navbar-brand text-primary-emphasis" href="/logout">
            <i class="fa fa-user me-2"></i>{{ auth()->user()->name }}
          </a>
        </div>
      </nav>
    </header>

    <div class="row mx-0">
      <div class="col-3 px-0 container-sidebar">
        <aside class="sidebar-dashboard bg-primary-subtle px-4">
          <h1 class="brand fs-2 pt-2">Aratek</h1>
          <hr>

          <ul class="list-unstyled d-flex flex-column gap-1">
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
              <a href="/dashboard" class="sidebar-dashboard__link">
                <div class="sidebar-dashboard__link--icon"><i class="fa fa-home"></i></div>
                <div class="sidebar-dashboard__link--title">Dashboard</div>
              </a>
            </li>

            <li class="{{ Request::is('dashboard/pegawai*') ? 'active' : '' }}">
              <a href="/dashboard/pegawai" class="sidebar-dashboard__link">
                <div class="sidebar-dashboard__link--icon"><i class="fa fa-users"></i></div>
                <div class="sidebar-dashboard__link--title">Pegawai</div>
              </a>
            </li>

            <li class="{{ Request::is('dashboard/user/setting*') ? 'active' : '' }}">
              <a href="{{ route('user.setting') }}" class="sidebar-dashboard__link">
                <div class="sidebar-dashboard__link--icon"><i class="fa fa-gear"></i></div>
                <div class="sidebar-dashboard__link--title">Setting</div>
              </a>
            </li>

            <li>
              <a href="/" class="sidebar-dashboard__link">
                <div class="sidebar-dashboard__link--icon"><i class="fa fa-home"></i></div>
                <div class="sidebar-dashboard__link--title">Home</div>
              </a>
            </li>
          </ul>

          <section class="toggle"></section>
        </aside>
      </div>

      <div class="col-9 m-3 mx-auto">
        @yield('main-content')
      </div>
    </div>

    <script src="/assets/scripts/script-dashboard.js"></script>
    <script src="/assets/scripts/bootstrap.bundle.min.js"></script>
  </body>
</html>