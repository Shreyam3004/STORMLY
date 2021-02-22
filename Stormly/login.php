<?php
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
      // echo "wrong username or password!";
      echo '<script>alert("wrong username or password!")</script>'; 
		}else
		{
      // echo "wrong username or password!";
      echo '<script>alert("wrong username or password!")</script>';
		}
	}
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-image: url('thunder.jpg');
    }

    * {
      box-sizing: border-box;
    }

    .input-container {
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      width: 100%;
      margin-bottom: 15px;
    }

    .cont1 {
      max-width: 50%;
      background-color: rgb(221, 139, 17);
      margin: auto;
      text-align: center;
      display: block;
      border-color: black;
      border-width: 3px;
      border-radius: 30px;
      border-style: solid;


      /* margin:8px;
	border-radius:20px;
	border-style: inset;
	border-color: black;
	border-width: 3px;
	background-color: rgb(239, 244, 248);
	font-family: 'Arvo', serif; */
    }

    .fa-user-circle {
      font-size: 45px;
      color: white;
      margin-right: 15px;
    }

    .fa-key {
      font-size: 45px;
      color: white;
      margin-right: 8px;
    }


    .icon {
      padding: 10px;
      background: dodgerblue;
      color: white;
      min-width: 50px;
      text-align: center;
    }

    .input-field {
      width: 100%;
      padding: 10px;
      outline: none;
      border:2px solid rgb(53, 46, 46);
      border-radius: 40px;
    }

    p {
      color: rgb(43, 39, 39);
    }

    a {
      color: rgb(43, 39, 39);
    }

    a:hover {
      color: rgb(20, 17, 17);
    }

    .input-field:focus {
      border: 4px solid  rgb(224, 163, 106);
    }

    /* Set a style for the submit button */
    .cont {
      text-align: center;
      display: block;
      margin: auto;
      max-width: 80%;
    }

    .btn {

      padding: 15px 20px;
      color: white;
      cursor: pointer;
      width: 50%;
      opacity: 0.9;
      border-radius: 50px;
    }

    h1 {
      color: rgb(51, 47, 47);
    }

    .btn:hover {
      opacity: 1;
    }

    .stormly {
      color: black;
      font-family: 'Pacifico', cursive;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

</head>

<body>
  </br>
  </br></br></br></br>
  <div class="cont1">
    <h1 style="text-align:center;">Welcome to <span class="stormly">Stormly's</span> Login Page!!</h1>
    <img src="img/logo.png" alt=""><br><br>
    <div class="cont">
      <form method="post" style="max-width:500px;margin:auto">

        </br>
        <div class="input-container">
          <i class="fa fa-user-circle" aria-hidden="true"></i>
          <input class="input-field" type="text" placeholder="username" name="user_name" required>
        </div>
        </br>

        <div class="input-container">
          <i class="fa fa-key" aria-hidden="true"></i>
          <input class="input-field" type="password" placeholder="password" name="password" required>
        </div>
        </br>
        <button type="submit" class="btn btn-success my-4 mx-2" name="login"><b class="login-button"
            style="color: black;">Login</b></button>
        <p>Not a user?<a href="signup.php"><b>Sign Up</b></a></p>
      </form>
    </div>
  </div>
</body>

</html>