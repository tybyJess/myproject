<html>
<head>
	<title>Login</title>
	<style>
		body{
			background: linear-gradient(blue, gray);
		}
		center{
			text-align: center;
			position: absolute;
			top: 20%;
			left: 30%;
			width: 40%;
			height: 40%;
			background: linear-gradient(gray, white);
		}
	</style>
</head>
<body>
	 <form class="user" action="{{route('Login.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
	<form>
		<center>
			<div>
				<div>
					<h1>Welcome to Admin Login</h1>
				</div>
				<div style="padding-top: 10px;">
					<input placeholder="Enter Username" type="text" name="username">
				</div>
				<div style="padding-top: 10px;">
					<input type="password" placeholder="Enter Password" name="password">
				</div>
				<div style="padding-top: 10px;">
					<input type="submit" value="Login">
				</div>
			</div>
         <a style="padding-left: 90%;" href="/Greet">Back</a>
		</center>
	</form>
</body>

</html>