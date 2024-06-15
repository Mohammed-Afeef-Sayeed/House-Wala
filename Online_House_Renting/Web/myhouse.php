<?php 
session_start();

	include("Connection.php");
	include("Function.php");

	$user_data = check_login($con);

  $house="select * from house where owner_name=echo $user_data['First_Name']";
  $query = mysqli_query($con,$house);
  $nums =mysqli_num_rows($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My House</title>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
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
                    <a href="#">My Houses</a>
                    <a href="logout.php">Log Out</a>
                    </div>
            </div>
        </div>
      </header>
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-4">
            <?php
                 if($nums>0)
                 {
                  while($row=mysqli_fetch_assoc($query))
                  {
                    ?>
                    <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                      <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="<?php echo $row['image']?>">
                    </a>
                    <div class="mt-4">
                      <h2 class="text-gray-900 title-font text-lg font-medium"><?php echo $row['name']?></h2>
                      <p class="mt-1"><?php echo $row['cost']?></p>
                     <a href="Description.php?id=<?php echo $row['Id'];?>"> View Details </a> 
                    </div>
                  </div>
                    <?php
                  }
                 }
                 ?>
            </div>
            </div>
        </section>




      <footer class="text-black body-font bg-orange-200">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <img src="pictures/pngegg.png">
            <span class="ml-3 text-xl">HouseLife</span>
          </a>
          <p class="text-sm text-black sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-blue-500 sm:py-2 sm:mt-0 mt-4">© 2022
            HouseLife —
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