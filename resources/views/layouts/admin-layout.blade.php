<!-- Header -->
@include('admin.includes.header')
<!-- SideBar -->
@include('admin.includes.sidebar')
<div class="main">
    <!-- TopBar -->
    @include('admin.includes.topbar')

    <main class="content">
        <!-- Main Content -->
        @yield('admin-content')
    </main>
    <!-- Footer -->
    @include('admin.includes.footer')
