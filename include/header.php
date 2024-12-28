<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>restaurant</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- rboto font link -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" class="active" href="public/assest/css/style.css?v=2;"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script type="text/javascript" >
		function testing() {

			var usertext= document.getElementById("utext").value
			if(usertext==""){
				alert("please give any feedback");
			}
			else{
				alert("THANK YOU FOR YOUR FEEEDBACK");

				 document.getElementById("utext").value = "";
			}
		}

	</script>


</head>
<body>
	<header>
		<div>
		<nav class="navbar navbar-expand-md ">
			<div class="container-fluid">
				<a href="#" class="navbar-brand">
					<img src="public/assest/images/logo1.png" width="200">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="menu">	
					<ul class="navbar-nav">
						<li class="nav-item "><a href="index.php" class="nav-link top-menu-link">Home</a></li>
						<li class="nav-item"><a href="about.php"class="nav-link top-menu-link">About us</a></li>
						<li class="nav-item"><a href="menu.php"class="nav-link top-menu-link"> Menu</a></li>
						<li class="nav-item"><a href="event.php"class="nav-link top-menu-link">Events</a></li>
						<li class="nav-item"><a href="contact.php"class="nav-link top-menu-link">Contact us</a></li>
					</ul>

					<div class="d-flex p-5">
						<a href="book.php">	<button type="button" class="btn btn-warning table-button" >Book A Table</button></a>		
					</div>
				</div>
			</div>

		</nav>
    </div>
	</header>
