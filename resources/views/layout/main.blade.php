<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-UzFv4kl4Czn8hIfrnyfPnJmGJq3aKkYsTswA1/9D1NPovarRThKjPcOkTaHfE2vGkxlzR46b0ATedZk9QKvCg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Top Reseller</title>
    <style>
		body {
			margin: 0;
			padding: 0;
		}
		.header {
			text-align: center;
			background-color: #333;
			color: #fff;
			padding: 20px;
		}
		.navbar {
			background-color: #444;
			color: #fff;
			padding: 10px;
            padding-left: 10%;
            padding-right: 10%;
			text-align: center;
		}
		.navbar a {
			display: inline-block;
			color: #fff;
			text-decoration: none;
			padding: 10px;
			position: relative;
		}
		.navbar a:hover {
			background-color: #555;
		}
		.navbar .dropdown-menu {
			display: none;
			position: absolute;
			top: 100%;
			left: 0;
			background-color: #444;
			z-index: 1;
			min-width: 160px;
			padding: 5px 0;
			border-radius: 4px;
		}
		.navbar .dropdown-menu a {
			display: block;
			color: #fff;
			padding: 5px 20px;
			text-decoration: none;
		}
		.navbar .dropdown:hover .dropdown-menu {
			display: block;
		}
		.navbar .dropdown i {
			margin-left: 5px;
		}
		.footer {
			position: fixed;
            bottom: 0;
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
			bottom: 0;
			width: 100%;
			margin-bottom: 0;
		}
	</style>
</head>
<body>
    <div class="header">
		<h1>Top Reseller</h1>
	</div>

	<div class="navbar">
		<a href="/">Home</a>
		<div class="dropdown">
			<a>Category <i class="fas fa-angle-down"></i></a>
			<div class="dropdown-menu">
				<a href="/category/shirt">Shirt</a>
				<a href="/category/bag">Bag</a>
				<a href="/category/shoes">Shoes</a>
				<a href="/category/dress">Dress</a>
			</div>
		</div>
		<a href="/top-5-brands">Top 5 Brands</a>
		<a href="/about-us">About Us</a>
	</div>

	<div class="content">
        @yield('content')
    </div>

</body>
<footer class="footer">
	&copy; 2023 Top Reseller. All Rights Reserved.
</footer>
</html>