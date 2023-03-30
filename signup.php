<php?
session_start();
include("connection.php");
include("fuction.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
	if(!empty($user_name)&& !empty($password) && !is_numeric($user_name))
	{
$user_id=random_num(20);
$query="insert into users(user_id,user_name,password)values('$user_id','$user_name','$password')";
mysqli_query($query);

//header("Location:login.php")
//die;
	}else{
		"echo please enter some valid information!";
	}
}
?>


<!Doctype html>
<html>
<head>
	<title>signup</title>
	</head>
		<body>
			<style type="text/css">
				#text{
				width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  width: 100%;
}	
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
#box{
	background-color: grey;
  margin: 5% auto 15% auto;
  border: 1px solid #888;
  width: 50%;
}
</style>
<div id="box">
	<form metho="POST">
		<div style="font-size: 20px;margin: 10px;color: white;">signup</div>
<input id="text"type="text" name="user_name"><br><br>
<input id="password" type="password" name="password"><br><br>

<input id="button" type="submit" name="signup"><br><br>

<a href="login.php">click to login</a>
		
	</form>
</div>
		</body>
		</html>