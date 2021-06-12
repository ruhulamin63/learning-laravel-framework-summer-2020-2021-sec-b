<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	<style>
		th, td {
		padding: 10px;
		}
	</style>
</head>
<body>
	<table border="1px" align="center" width="100%">
		<tr>	
			<td>
				<table width="100%">
					<tr>
						<td width="150px" height="50px">
							<img src="#" width="100%" height="100%">
						</td>
						<td align="right"> 
							<a href="/home">Home</a> |
							<a href="/login">Login</a> |
							<a href="#">Registration</a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table border="1px" align="center" width="100%">
		<tr>
			<td colspan="2" align="center" width="100%" height="100%">
				<table>
					<tr>
						<td>
							<form method="post">
								<fieldset>
									<legend>LOGIN</legend>
									<table>
										<tr>
											<td colspan="2" align="center" width="150px" height="50px">
												<img src="#">
												<hr>
												<h2>{{session('msg')}}</h2>
											</td>
										</tr>

										<tr>
											<td>Username</td>
											<td>
												<input type="text" name="uname" id="uname" placeholder="@username" value="">
											</td>
										</tr>

										<tr>
											<td>Password</td>
											<td>
												<input type="password" name="password" id="password"placeholder="password" value="">
											</td>
										</tr>

										<tr>
											<td><input type="checkbox" id="remember" name="remember"> Remember Me</td>
										</tr>
										<tr align="center">
											<td colspan="2">
												<hr><br>
												<input type="submit" name="submit" id="submit" value="Sing In"><br><br>

												<a href="#">Forgot Password ?</a><br><br>
												<a href="#">Create an account ?</a>
											</td>
										</tr>
									</table>
								</fieldset>
							</form>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr height="50px">
			<td colspan="2" align="center">
				copyright@2021
			</td> 
		</tr>
	</table>
</body>
</html>