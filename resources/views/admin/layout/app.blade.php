<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.layout.head')
	@yield('head-content')
</head>
<body>
	@include('admin.layout.header')
	@yield('content')
    
    @include('admin.layout.footer')
    @yield('footer-content')	
</body>
</html>