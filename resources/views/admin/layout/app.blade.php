<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield("title")</title>

	</head>
	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Navbar -->
            @include("admin.layout.nav")
			<!-- Sidebar -->
			@include("admin.layout.aside")

            @yield("admin-content")
            
			<footer class="main-footer">
				<strong>Copyright &copy; 2024 Clinic Management All rights reserved.</strong>
			</footer>
		</div>
	</body>
</html>