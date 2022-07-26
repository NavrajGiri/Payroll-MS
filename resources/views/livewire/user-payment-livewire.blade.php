
<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - User Dashboard</title>

  <!-- Tailwind is included -->
  <link rel="stylesheet" href="css/main.css?v=1628755089081">

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"/>
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"/>
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6"/>

  <meta name="description" content="Admin One - free Tailwind dashboard">

  <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/">
  <meta property="og:site_name" content="JustBoil.me">
  <meta property="og:title" content="Admin One HTML">
  <meta property="og:description" content="Admin One - free Tailwind dashboard">
  <meta property="og:image" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1920">
  <meta property="og:image:height" content="960">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="Admin One HTML">
  <meta property="twitter:description" content="Admin One - free Tailwind dashboard">
  <meta property="twitter:image:src" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="twitter:image:width" content="1920">
  <meta property="twitter:image:height" content="960">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script>

</head>
<body>

<div id="app">

<nav id="navbar-main" class="navbar is-fixed-top">
  <div class="navbar-brand">
    <a class="navbar-item mobile-aside-button">
      <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
    </a>
    <div class="navbar-item">
      <div class="control"><input placeholder="Search everywhere..." class="input"></div>
    </div>
  </div>
  <div class="navbar-brand is-right">
    <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
      <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
    </a>
  </div>
  <div class="navbar-menu" id="navbar-menu">
    <div class="navbar-end">
      <div class="navbar-item dropdown has-divider">
        <a class="navbar-link">
          <span class="icon"><i class="mdi mdi-menu"></i></span>
          <span>Sample Menu</span>
          <span class="icon">
            <i class="mdi mdi-chevron-down"></i>
          </span>
        </a>
        <div class="navbar-dropdown">
          <a href="" class="navbar-item">
            <span class="icon"><i class="mdi mdi-account"></i></span>
            <span>My Profile</span>
          </a>
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-settings"></i></span>
            <span>Settings</span>
          </a>
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-email"></i></span>
            <span>Messages</span>
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-logout"></i></span>
            <span>Log Out</span>
          </a>
        </div>
      </div>
      <div class="navbar-item dropdown has-divider has-user-avatar">
        <a class="navbar-link">
          <div class="user-avatar">
            <img src="image/sts logo.jpg" alt="sts logo" class="rounded-full">
          </div>
          <div class="is-user-name"><span>User</span></div>
          <span class="image/logo.png"><i class="mdi mdi-chevron-down"></i></span>
        </a>
        <div class="navbar-dropdown">
          <a href="" class="navbar-item">
            <span class="icon"><i class="mdi mdi-account"></i></span>
            <span>My Profile</span>
          </a>
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-settings"></i></span>
            <span>Settings</span>
          </a>
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-email"></i></span>
            <span>Messages</span>
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-logout"></i></span>
            <span>Log Out</span>
          </a>
        </div>
      </div>

      <a title="Log out" class="navbar-item desktop-icon-only">
        <span class="icon"><i class="mdi mdi-logout"></i></span>
        <span>Log out</span>
      </a>
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
        <a href="{{ route('dashboard') }}">
          <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
          <span class="menu-item-label">Dashboard</span>
        </a>
      </li>
    </ul>
    <ul class="menu-list">
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
  </div>
</aside>

<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>User</li>
      <li>Payments</li>
    </ul>
  </div>
</section>



<div>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
           User Payments
            </div>

</div>
    </x-slot>
    {{-- <input wire:model="keyword"> --}}
    <div class="overflow-x-center">
        <div class="flex">
            <div class="w-full lg:w-5/6 ">
                <div class="bg-lightblue rounded my-6">
                    <table class="min-w-max w-full table-center">
                        <thead>
                            <tr class="bg-green-500 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Id</th>
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-left">Computer No.</th>
                                <th class="py-3 px-6 text-center">Rank</th>
                                {{-- <th class="py-3 px-6 text-center">Gender</th> --}}
                                <th class="py-3 px-6 text-center">Address</th>
                                <th class="py-3 px-6 text-center">Phone No.</th>
                                <th class="py-3 px-6 text-center">PAN No.</th>
                                <th class="py-3 px-6 text-center">Bank Name.</th>
                                <th class="py-3 px-6 text-center">Account No.</th>
                                <th class="py-3 px-6 text-center">Nagarik Lagani Kosh No.</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        {{-- </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach($all_users as $user)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{$user->id}}
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{$user->name}}
                                </td>
                                <td class="py-3 px-6 text-left">
                                    {{$user->computer_no}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$user->rank}}
                                </td>
                                {{-- <td class="py-3 px-6 text-center">
                                    {{$user->date_of_birth}}
                                </td><td class="py-3 px-6 text-center">
                                    {{$user->gender}}
                                </td><td class="py-3 px-6 text-center">
                                    {{$user->merital_status}}
                                </td><td class="py-3 px-6 text-center">
                                    {{$user->address}} --}}
                                {{-- </td><td class="py-3 px-6 text-center">
                                    {{$user->phone_no}} --}}
                                {{-- </td><td class="py-3 px-6 text-center">
                                    {{$user->joining_date}}
                                </td> --}}
                                {{-- <td class="py-3 px-6 text-center">
                                    {{$user->blood_group}}
                                </td> --}}
                                {{-- <td class="py-3 px-6 text-center">
                                    {{$user->pan_no}}
                                </td><td class="py-3 px-6 text-center">
                                    {{$user->bank_no}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$user->account_no}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$user->grade_id}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{$user->nagrik_lagani_kosh_no}}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <a href="{{route('admin.user.edit',$user->id)}}">

                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                    </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
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
  </div>
  
  
  <!-- Scripts below are for demo only -->
  <script type="text/javascript" src="js/main.min.js?v=1628755089081"></script>
  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
  <script type="text/javascript" src="js/chart.sample.min.js"></script>
  
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
  
  </body>
  </html>