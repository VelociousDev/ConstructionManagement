@include('templates.header')
  
   <!-- Page Loader -->
<!-- Top Bar -->
@include('templates.topbar')
<!-- Overlay For Sidebars -->
@include('templates.sidebar')
<!-- Chat-launcher -->
@include('templates.chat')

   <!-- Main Content -->
   <section class="content home">
    @yield('content')
   </section>


   @if(Session::has('error'))
<div class="alert alert-danger">
  {{ Session::get('error')}}
</div>
@endif



@if(!Session::has('key'))
@php
header("Location: " . URL::to('/logout'), true, 302);
exit();
@endphp
@endif
@include('templates.modal')

@include('templates.footer')