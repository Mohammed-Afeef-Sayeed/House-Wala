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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
        <a href="Contact.php" class="mx-10 hover:text-black">Contact</a>
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
     <section class=" pt-10 text-black body-font bg-blue-100">
        <div class="container px-5 py-20 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-black">Contact Us</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-black">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat quis necessitatibus explicabo, odit accusamus doloribus voluptate porro labore iusto dignissimos consequuntur expedita, fuga ipsam? Cupiditate cum nesciunt labore magni ratione.</p>
          </div>
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
              <div class="p-2 w-full">
                <form action="mailto:HouseLife@gmail.com" method="post" enctype="text/plain" >
                <div class="relative">
                  <label for="name" class="leading-7 text-lg text-black">Name</label>
                  <input type="text" id="name" name="name" class="w-full bg-white bg-opacity-50 rounded border border-black focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-black py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-full">
                <div class="relative">
                  <label for="email" class="leading-7 text-black text-lg">Email</label>
                  <input type="email" id="email" name="email" class="w-full bg-white bg-opacity-50 rounded border border-black focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-black py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-full">
                <div class="relative">
                  <label for="message" class="leading-7 text-black text-lg">Message</label>
                  <textarea id="message" name="message" class="w-full bg-white bg-opacity-50 rounded border border-black focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-40 text-base outline-none text-black py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
              </div>
              <div class="pt-10 w-full ">
                <button class="flex mx-auto text-black bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
              </div>
              </form>
          </div>
        </div>
      </section>
      <footer class="text-black body-font bg-orange-200">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a href="home.html" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
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