<?php 

session_start();

	include("Connection.php");
	include("Function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$Email = $_POST['Email'];
		$password = $_POST['Password'];

		if(!empty($Email) && !empty($password) && !is_numeric($Email))
		{

			//read from database
			$query = "select * from user where Email = '$Email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
					}
				}
			}
			
            function_alert("wrong Email or password!");
		}else
		{
            function_alert("wrong Email or password!");
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<link rel="stylesheet" href="tailwind.min.css">
<style>
    #body{
        line-height: 1;
        background-color: #f0f4f8fa;
        background-image: url("pictures/bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
    #block{

        margin:auto;
        margin-top: 200px;
        width: 400px;
        background-color: transparent ;
        display: flex;
        flex-shrink: none;

    }
    input{
      width: 300px;
    }
    form{
      width: 100%;
      padding: 7px;
    }
    #c_n_a{
      margin-left: 80px;
    }
    #c_n_a:hover{
        color: #e22626fa;
    }
    
</style>
<body  id="body" class="">
        <div id="block" >
        <div class="flex justify-center border-rose-500">
            <div class="h-[90%] w-full md:w-3/4 m-4">
                <div class="flex flex-col justify-center items-center mt-10 md:mt-4 space-y-6 md:space-y-8">
                    <form method="post">
                    <div class="">
                        <input type="text" placeholder="Email/username" name="Email"class=" bg-white rounded-lg px-10 py-2 focus:black text-black placeholder:text-gray-500 placeholder:opacity-30 font-semibold md:w-72 lg:w-[340px]">
                    </div><br>
                    <div class="">
                        <input type="password" placeholder="Password"name="Password"
                            class=" bg-white rounded-lg px-10 py-2 focus:border focus:violet text-black placeholder:text-gray-600 placeholder:opacity-30 font-semibold md:w-72 lg:w-[340px]">
                    </div>
                </div><br>  
                <div class="text-center mt-7">
                <a href="index.php"><button id="c_n_a" class="uppercase px-5 py-2 rounded-md text-white bg-blue-500 hover:bg-violet-600  font-medium">login</button></a>
                </div>
            </form>
                <div class="text-xl cursor-pointer flex flex-col justify-center items-center mt-5 " >
                    <div id="c_n_a" class="text-white font-semibold">or</div>
                </div>
                <div class="text-center my-6 flex flex-col " style="margin-left: 20px;">
                    <a href="Signup.php" id="c_n_a" class="text-l font-bold text-white hover:ring-sky-500 m-1">Create New Account</a>
                </div>
            </div>
        </div>
    </div>
        </div>
        <footer class=" absolute inset-x-0 bottom-0 text-black body-font bg-orange-200">
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