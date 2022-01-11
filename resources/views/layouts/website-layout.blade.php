@include('website.includes.header')
<div class="preload"></div>
@include('website.includes.topbar')
<!--/ Topbar end -->

<!-- Header start -->
@include('website.includes.navbar')
<!--/ Header end -->

{{-- Main Content --}}
@yield('website-content')

@include('website.includes.footer')
