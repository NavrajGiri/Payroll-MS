

<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Admin Dashboard</title>

  <!-- Tailwind is included -->
  <link rel="stylesheet" href="{{asset('css/main.css')}}">

  @livewireStyles
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

<div id="app">

<nav id="navbar-main" class="navbar is-fixed-top">
  <div class="navbar-brand">
    <a class="navbar-item mobile-aside-button">
      <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
    </a>
  </div>
  <div class="navbar-brand is-right">
    <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
      <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
    </a>
  </div>
  <div class="navbar-menu" id="navbar-menu">
    <div class="navbar-end">

      </div>
      <div class="navbar-item dropdown has-divider has-user-avatar">
        <a class="navbar-link">
          <div class="is-user-name"><span>{{auth()->user()->name}}</span></div>
          <span class="image/logo.png"><i class="mdi mdi-chevron-down"></i></span>
        </a>
        <div class="navbar-dropdown">

            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <a class="navbar-item" href="{{ route('logout') }}"
                    @click.prevent="$root.submit();">
                    <span class="icon"><i class="mdi mdi-logout"></i></span>
                    <span>{{ __('Log Out') }}</span>
                </a>
            </form>
        </div>
      </div>
    </div>
  </div>
</nav>


<aside class="aside is-placed-left is-expanded">
  <div class="aside-tools">
    <div>
      Payroll Management System
    </div>
  </div>
  <div class="menu is-menu-main">
    <p class="menu-label">General</p>
    <ul class="menu-list">
      <li class="active">
        <a href="{{route('dashboard')}}">
          <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
          <span class="menu-item-label">Dashboard</span>
        </a>
      </li>
    </ul>
    <ul class="menu-list">
        @if(auth()->user()->type=="admin")
            <li class="--set-active-tables-html">
            <a href="{{route('admin.user')}}">
                <span class="icon"><i class="mdi mdi-table"></i></span>
                <span class="menu-item-label">User</span>
            </a>
            </li>
            <li class="--set-active-forms-html">
            <a href="{{route('admin.rank')}}">
                <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
                <span class="menu-item-label">Ranks</span>
            </a>
            </li>
            <li class="--set-active-profile-html">
            <a href="{{route('admin.grade')}}">
                <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                <span class="menu-item-label">Grades</span>
            </a>
            </li>
            <li>
            <a href="{{route('admin.bill')}}">
                <span class="icon"><i class="mdi mdi-lock"></i></span>
                <span class="menu-item-label">Bills</span>
            </a>
            </li>
            <li>
            <a href="{{route('admin.allowance')}}">
                <span class="icon"><i class="mdi mdi-view-list"></i></span>
                <span class="menu-item-label">Allowance</span>
            </a>
            </li>
            <li>
            <a href="{{route('admin.issuedsalary')}}">
                <span class="icon"><i class="mdi mdi-view-list"></i></span>
                <span class="menu-item-label">Issued Salary</span>
            </a>
            </li>
        @elseif(auth()->user()->type=="user")
            <li>
                <a href="{{route('user.payment')}}">
                    <span class="icon"><i class="mdi mdi-view-list"></i></span>
                    <span class="menu-item-label">Payments</span>
                </a>
            </li>
            <li>
                <a href="{{route('user.bill')}}">
                    <span class="icon"><i class="mdi mdi-view-list"></i></span>
                    <span class="menu-item-label">Bills</span>
                </a>
            </li>
            <li>
                <a href="{{route('user.allowance')}}">
                    <span class="icon"><i class="mdi mdi-view-list"></i></span>
                    <span class="menu-item-label">Allowences</span>
                </a>
            </li>
        @endif
  </div>
</aside>

@if (isset($header))
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
    </div>
</header>
@endif
<main class="p-10 w-full">
{{$slot}}
</main>

<footer class="footer">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
    <div class="flex items-center justify-start space-x-3">
      <div>
        © 2021, Shree Signal Tranning School
      </div>

      <div>
        <p>Distributed By: S.N 5 Advance Computer & V-Sat Orientation</p>
      </div>
    </div>
  </div>
</footer>
@stack('modals')

@livewireScripts
</div>


<!-- Scripts below are for demo only -->
<script type="text/javascript" src="{{asset('js/main.min.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="{{asset('js/chart.sample.min.js')}}"></script>

<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>
