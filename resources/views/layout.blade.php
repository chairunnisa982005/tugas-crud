@include('partials/head')

<body>

  <!--start header-->
  @include('partials/topbar')
  <!--end top header-->


   <!--start sidebar-->
   @include('partials/sidebar')
<!--end sidebar-->

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
        @yield('content')



    </div>
  </main>
  <!--end main wrapper-->

  <!--start overlay-->
     <div class="overlay btn-toggle"></div>
  <!--end overlay-->

   <!--start footer-->
   @include('partials/footer')