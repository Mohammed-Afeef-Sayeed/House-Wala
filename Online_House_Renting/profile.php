<?php 
session_start();

	include("Connection.php");
	include("Function.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="tailwind.min.css">
	<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

</head>
<style>
	@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");
body {
	font-family: "Roboto", sans-serif;
	background-repeat: no-repeat;
}

.shadow {
	box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1) !important;
}

.profile-tab-nav {
	min-width: 250px;
}

.tab-content {
	flex: 1;
}

.form-group {
	margin-bottom: 1.5rem;
}

.nav-pills a.nav-link {
	padding: 15px 20px;
	border-bottom: 1px solid #ddd;
	border-radius: 0;
	color: #333;
}
.nav-pills a.nav-link i {
	width: 20px;
}

.img-circle img {
	height: 100px;
	width: 100px;
	border-radius: 100%;
	border: 5px solid #fff;
}
.dropdown {
  display: inline-block;
  position: relative;
  width: 100px;
  height: 30px;
  text-align: center;
}
.dropdown-content {
  display: none;
  position: absolute;
  width: 100%;
  overflow: auto;
  box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.4);
}
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown-content a {
  display: block;
  color: #000000;
  padding: 5px;
  text-decoration: none;
}
.dropdown-content a:hover {
  color: #FFFFFF;
  background-color: #00A4BD;
}
</style>
<body>
	<header class=" relative top-0 left-0 right-0 text-black body-font bg-orange-300">
        <div class="container mx-auto flex flex-wrap p-4 md:flex-row items-center">
            <a href="home.html" class="flex title-font font-medium items-center text-black  md:mb-0">
                <img src="pictures/pngegg.png">
                <span class="ml-4 text-xl">HouseLife</span>
            </a>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-black justify-center">
                <a href="index.php" class="mx-10 hover:text-black">Home</a>
                <a href="About.html" class="mr-10 hover:text-black">About Us</a>
                <a href="About.html" classs="mx-10 hover:text-black">Buy/Rent</a>
                <a href="Contact.html" class="mx-10 hover:text-black">Contact</a>
            </nav>
            <div class="dropdown">
                <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-1 focus:outline-none hover:bg-gray-200 rounded text-black mt-1 md:mt-0 dropdown">Account<i class="fas fa-solid fa-caret-down"></i></button>
                <div class="dropdown-content bg-gray-100">
                <a href="account.html">Profile</a>
                <a href="#">My Houses</a>
                <a href="">Log Out</a>
                </div>
              </div>
        </div>
    </header>
	<section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5">Your Profile</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img text-center mb-3" style="width:250px;">
                        <img src="pictures/avatar.jpg" alt="Image" class="shadow " style="border-radius:50%; height:250px">
						</div>
						<h4 class="text-center"></h4>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>First Name :</label>
								  	&nbsp;&nbsp;<b><?php echo $user_data['First_Name']; ?></b>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Last Name :</label>
								  	&nbsp;&nbsp;<b><?php echo $user_data['Last_Name']; ?></b>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email :</label>
								  	&nbsp;&nbsp;<b><?php echo $user_data['Email']; ?></b>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Date of Birth :</label>
								  	&nbsp;&nbsp;<b><?php echo $user_data['DOB']; ?></b>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Phone number :</label>
								  	&nbsp;&nbsp;<b><?php echo $user_data['Mobile_Number']; ?></b>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
</body>
</html>