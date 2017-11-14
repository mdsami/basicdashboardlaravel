<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')
    @yield('style')
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo">

@include('partials.sidebar')

<!-- @include('partials.manubar') -->


@yield('content')


@include('partials.footer')

@yield('script')

</body>
</html>