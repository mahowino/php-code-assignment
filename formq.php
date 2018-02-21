<!DOCTYPE html>
<html>
<head>
	<title>form</title><style type="text/css">
	.left{float: left;width: 50%;
		height: 30px;text-align: left}
		.right{text-align: right;width: 50%;float: right;height: 30px}
		li{display: inline}
		input{padding: 0;border: 0;margin: 0;border-bottom: 2px solid white;background-color: black;color: white}
		span{color: white}
		.container{height: 70px;background-color: #00BFFF;color: white;width: 100%;padding: 0;margin: 0 auto;position: absolute;left: 0;top:0;position: fixed;z-index: 1;}
		.nav{ float: right;width: 50%;height: 70px;text-align: right; }
		.nav ul{list-style-type: none}
		.nav ul li{display: inline;}
		.icon{float: left;width: 50%;height: 70px;text-align: left;}
p{color: white}
a:hover{color: red}
</style>
</head>
<body style="background-image: url(08b1759d3d83cab0bd980522b0b44db5.jpg);background-size: cover;background-repeat: no-repeat;"><div class="container">
	<div class="icon"><img src="emobilis-logo-red1.jpg" width="90px" height="70px"></div>
	<div class="nav"><ul>
		<li><a href="">help</a></li>
		<li><a href="">contact us</a></li>
		<li><a href="">about us</a></li>
	</ul></div>
</div>
<br><br><br><br>
<form method="GET"  style="position: absolute;left: 350px;top: 100px;background-color:|#131000;border: 2px solid black;padding: 20px;box-sizing: border-box;box-shadow: .6;background-color: black;opacity: .8;width: 400px;height: 300px;text-align: left;border-radius: 2px" action="exams.php">
		<h3 style="color: white">LOGIN</h3>
		<input type="text" name="firstname" placeholder="username or email" required><br><br>
		<input type="text" name="middlename" placeholder="password" required><br><br>
		<input type="checkbox" name="password"><span style="color: white">keep me logged in</span><br><br>
		<a href="#" style="color: white">forgot your password</a>
	
<br><br>
<button style="background-color: green;border-radius: 10px;padding: 10px;border: 0;padding-left: 20px;padding-right: 20px;color: white">submit</button>
	</form>

</body>
</html>