<!doctype html>
<html lang="en">
<head>
    <title>Main Menu</title>
	@include('layouts.headlinkbe')
</head>
<body class="body-color">
	@include('layouts.headerbe')
    <div class="container">
       	<h1 class="text-center mt-3"> Welcome, {{ Auth::user()->name }}</h1>
    </div>
</body>
</html>
