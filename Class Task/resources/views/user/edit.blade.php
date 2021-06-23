<!DOCTYPE html>
<html>
<head>
	<title>Update Page</title>
</head>
<body>

	<a href="/user/list"> Back</a> |
	<a href="/login"> Logout </a> 

	<h2>Update User</h2>

	<form method="post">
	@csrf

	<table>
        <tr>
			<td>ID</td>
			<td><input type="id" name="id" value="{{$user->id}}"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="uname" value="{{$user->username}}"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$user->name}}"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" value="{{$user->email}}"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="type" name="type" value="{{$user->type}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Update"></td>
		</tr>
	</table>
	</form>
</body>
</html>