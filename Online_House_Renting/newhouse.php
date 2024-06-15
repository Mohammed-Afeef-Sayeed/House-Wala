<?php 
session_start();

	include("Connection.php");
	include("Function.php");

	$user_data = check_login($con);

  if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
		$description = $_POST['description'];
        $o_name=$_POST['o_name'];
        $location=$_POST['location'];
        $size=$_POST['size'];
        $price=$_POST['price'];

        $image = $_FILES['image']['name'];
            $tempname = $_FILES["image"]["tmp_name"];
            $folder = "pictures\ $image";
		if(!empty($name) && !empty($o_name))
		{ 

			//save to database
			$query = "insert into house (name, Description, owner_name, location,size, cost,image) values ('$name','$description','$o_name','$location','$size','$price','pictures/pic-6.avif')";

			mysqli_query($con, $query);

			header("Location: myhouse.php");
			die;
		}else
		{
            function_alert("Enter Valid Information !!");
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Details</title>
</head>
<link rel="stylesheet" href="tailwind.min.css">
<style>
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
<header class=" absolute top-0 left-0 right-0 text-black body-font bg-orange-300">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a href="home.html" class="flex title-font font-medium items-center text-black mb-4 md:mb-0">
        <img src="pictures/pngegg.png">
        <span class="ml-3 text-xl">HouseLife</span>
      </a>
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-black justify-center">
        <a href="" class="mx-10 hover:text-black">Home</a>
        <a href="About.html" class="mr-10 hover:text-black">About Us</a>
        <a href="Shop.php" classs="mx-10 hover:text-black">Buy/Rent</a>
        <a href="Contact.html" class="mx-10 hover:text-black">Contact</a>
      </nav>
      <?php echo $user_data['First_Name']; ?>&nbsp;&nbsp;
      <div class="dropdown">
                <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-black mt-4 md:mt-0 dropdown">Account <i class="fas fa-solid fa-caret-down"></i></button>
                <div class="dropdown-content bg-gray-100">
                <a href="profile.php">Profile</a>
                <a href="myhouse.php">My Houses</a>
                <a href="logout.php">Log Out</a>
                </div>
        </div>
    </div>
  </header>
      <section class="text-gray-600 body-font overflow-hidden pt-10">
      <form action="" method="POST">
        <div class="container px-5 py-24 mx-auto">
          <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
              <h2 class="text-sm title-font text-black tracking-widest">Appartment</h2>
              <h1 class="text-black text-3xl title-font font-medium mb-4"><input type="text" name="name"></h1>
              <div class="flex mb-4">
                <a class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Description</a>
                
                <!--<a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Reviews</a>
                <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Details</a>-->
              </div>
              <textarea name="description" id="" cols="60" rows="3"></textarea>
              <div class="flex border-t border-black py-2">
                <span class="text-black">Owner Name</span>
                <span class="ml-auto text-black"><input type="text" name="o_name"></span>
              </div>

              <div class="flex border-t border-black py-2">
                <span class="text-black">Location</span>
                <span class="ml-auto text-black"><input type="text" name="location"></span>
              </div>
              <div class="flex border-t border-black py-2">
                <span class="text-black">Size</span>
                <span class="ml-auto text-black"><input type="text" name="size"></span>
              </div>
              <div class="flex border-t border-b mb-6 border-black py-2">
                <span class="text-black">Cost/Rent</span>
                <span class="ml-auto text-black"><input type="number" name="price"></span>
              </div>
              <div class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded">
              <input type="file" name="image" accept=".avif,.jpg">
            </div>
              <div class="flex">
                <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" type="submit" value="upload">Add</button>
              </div>
            </div>
          </div>
        </div>
</form>
      </section>
      <footer class="text-black body-font bg-orange-200">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <img src="pictures/pngegg.png">
            <span class="ml-3 text-xl">HouseLife</span>
          </a>
          <p class="text-sm text-black sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 HouseLife —
            <a href="#" class="text-black ml-1" rel="noopener noreferrer" target="_blank">@HouseLife</a>
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-black">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-black">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                viewBox="0 0 24 24">
                <path
                  d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                </path>
              </svg>
            </a>
            <a class="ml-3 text-black">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-3 text-black">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"
                class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none"
                  d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </footer>
</body>
</html>