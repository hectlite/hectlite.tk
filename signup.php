

<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
	<meta name="hectlite">
  <meta keyword="hectlite">
  <meta charset="UTF-8">
  <title>hectnet softwares</title>
  
   <link rel="icon"type="image/jpg"href="file:///C:/Users/25576/Documents/SharedScreenshot.jpg">
   
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	
	*{
 margin: 0px;
box-sizing: border-box;
 padding: 0px;

}

  body{
    display: flex;
    background-color: beige;
    background-image: url('https://cdn.pixabay.com/photo/2021/05/07/16/39/light-bulb-6236641_960_720.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    justify-content: center;
    height: 100vh;
    flex-direction: column;
    align-items: center;

  }

  form{
    margin-top: 50px;
    text-align: center;
  }

input{
  display: block;
  width: 350px;
  height: 40px;
  margin: 20px;
  border: none;
  outline: none;
  font-size: 20px;
  border-bottom: 3px solid orange;
   background: transparent;
   color: white;

}

    input[type=submit] {
      display: block;
      width: 350px;
      height: 40px;
      font-size: 20px;
      background-color: orange;
      border: none;
      color: white;
      margin-top: 30px;
    }

form h1{
  margin-bottom: 100px;
  color: white;
}

::placeholder{
  color: white;
}






  a {
    text-decoration: none;
    color: green;
  
  }
</style>
</head>

<body>



<?php  
$con = mysqli_connect('localhost', 'hectlite', '1hect@?!', 'hectlite');
if(!$con){
  echo "please check your database connection";
}

?>
<?php 

require_once('signup.php');


if(isset($_POST['btn'])){
 $username = mysqli_real_escape_string($con,$_POST['username']);
 $email = mysqli_real_escape_string($con,$_POST['email']);
 $pass = mysqli_real_escape_string($con,$_POST['pass']);
 $cpass = mysqli_real_escape_string($con,$_POST['cpass']);
 
  if(empty($username) || empty($email) || empty($pass) || empty($cpass)){

    echo "please fill in the blanks";
  }
 
    if($pass!=$cpass){

      echo "password Not Matched";

    }

    else{


      $pass = md5($pass);
      $sql = "insert into signup (username, email, pass,cpass) values ('$username','$email','$pass','$cpass')";
      $result = mysqli_query($con,$sql);

      if($result){
        echo "registered successfully";
      }

      else{
        echo "something happened while querrrying";
      }
    }


}


?>








	<form action="signup.php" method="POST">
		<h1>Signup Now</h1>
		<input type="text" name="username" placeholder="Username" required/>
		<input type="email" name="email" placeholder="Email" data-rule="email" required/>
		<input type="password" name="pass" placeholder="Password" minlength="8"  maxlength="15" required/>
		<input type="password" name="cpass" placeholder="Confirm password" required/>
		<input type="submit" value="Signup" name="btn">	
		
	</form>

</body>
</html>
