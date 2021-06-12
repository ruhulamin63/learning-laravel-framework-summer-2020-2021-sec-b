<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User details</title>
</head>
<body>
    <a href="/user/list">Back</a> |
	<a href="/login"> Logout </a> 
   <h1>Delete Information</h1>
  
   <form method="post">
		
        <table border="1">
			<tr>
			    <td>Id</td>
			    <td>{{$user['id']}}</td>
		    </tr>
		    <tr>
			    <td>Username</td>
			    <td>{{$user['name']}}</td>
		    </tr>
		
		    <tr>
			    <td>Email</td>
			    <td>{{$user['email']}}</td>
		    </tr>
		</table>
        <input type="submit" name="Submit" value="Delete">
	</form>
</body>
</html>