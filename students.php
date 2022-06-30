<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="img">
		
	</div>
	<!-- All our code. write here   -->
	<div class="header" style="padding-top:0;">
		<img src="Images/download.jpeg" alt="zalego" style="height: 50px; width:50px;padding-top:0;" class="rounded-circle">
		<a href="#" class="navbar-trigger"><span></span></a>
		
		<span class="pull-right" style="padding:10px 30px;text-decoration:none">
	      <a href="logout.php"><i class="fa fa-sign-out fa-2x"></i></a>
	</span>
	</div>
	<div class="sidebar">
		<nav>
			<ul>
                <li>
					<a href="index.php">
						<span><i class="fa fa-home" aria-hidden="true"></i></span>
						<a href="index.php" class="student"><span>Home</span></a>
					</a>
				</li>
				<li>
					<a href="">
						<span><i class="fa fa-group"></i></span>
						<span>Students</span>
					</a>
				</li>
				<li>
					<a href="">
						<span><i class="fa fa-folder-open"></i></span>
						<span>Courses</span>
					</a>
				</li>
				<li>
					<a href="">
						<span><i class="fa fa-graduation-cap"></i></span>
						<span>Campus</span>
					</a>
				</li>

			</ul>

		</nav>
		
	</div>
	<div class="main-content">
		<div class="container-fluid">
				<div class="row" style="width:100% ;">
					<div class="col-lg-12">
						<div class="card-holder bg-dark text-white text-center">
							<span>Student Table</span>
						</div>
						<div class="card-body">
						<table class="table table-striped ">
							<thead>
								<tr>
								<th scope="col">id</th>
								<th scope="col">Fullname</th>
								<th scope="col">Phone</th>
								<th scope="col">email</th>
								<th scope="col">course</th>
								<th scope="col">gender</th>

								</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td>web development</td>
								<td>male</td >
								</tr>
								<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								</tr>
								<tr>
								<th scope="row">3</th>
								<td colspan="2">Larry the Bird</td>
								<td>@twitter</td>
								</tr>
							</tbody>
						</table>
							
						<div class="card-footer"></div>

					</div>
				</div>
		</div>
	</div>
	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>