@include('layouts.header')

<div class="wrapper">

    @include('layouts.navbar')
    @include('layouts.sidebar')

  <div class="content-wrapper">
    @include('sweetalert::alert')
    @yield('content')
  </div>

@include('layouts.footer')
