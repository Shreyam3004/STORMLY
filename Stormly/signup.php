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

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
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
      /* display: -ms-flexbox; */
      /* IE10 */
      /* display: flex; */
      width: 100%;
      margin-bottom: 15px;
    }

    .cont1 {
      max-width: 50%;
      background-color: rgb(221, 139, 17);
      margin: auto;
      text-align: center;
      display: block;
      border-color: rgb(224, 163, 106);
      border-width: 10px;
      border-radius: 30px;
      border-style: solid;
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
      outline: rgb(224, 163, 106) ;
      border: 2px solid rgb(43, 41, 39);
      border-radius: 40px;
    }

    p {
      color:  rgb(71, 56, 32);
    }

    a {
      color:  rgb(71, 56, 32);
    }

    a:hover {
      color: rgb(20, 17, 17);
    }

    .input-field:focus {
      border: 5px solid rgb(224, 163, 106);
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
      color: rgb(71, 56, 32);
    }

    .btn:hover {
      opacity: 1;
    }

    .stormly {
      color: black;
      font-family: 'Pacifico', cursive;
    }
    .login-button{
        border:2 px solid black; 
     
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

</head>

<body>
  </br>
  </br></br></br></br>
  <div class="cont1">
    <h1 style="text-align:center;">Welcome to <span class="stormly">Stormly's</span> SignUp Page!!</h1>
    <img src="img/logo.png" alt=""><br><br>
    <div class="cont">
      <form method="post" style="max-width:500px;margin:auto">

        </br>
          <div class="input-container">
            <input class="input-field" type="text" placeholder="username" name="user_name" required>
          </div>
          </br>
          <div class="input-container">
            
            <input class="input-field" type="password" placeholder="password" name="password" required>
          </div>
          </br>
        <button type="submit" class="btn btn-dark my-4 mx-2" name="signup"><b class="login-button"
            style="color: black">SignUp</b></button>
        <p>Already a user?<a href="login.php"><b>Login</b></a></p>
      </form>
    </div>
  </div>
</body>

</html>