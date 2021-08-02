<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User details</title>
</head>
<body>

    <a href="/user/list"> Back</a> |
	<a href="/login"> Logout </a> 

    <table border="1" align="center">
        <tr>
            <th colspan="6">User List</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
        <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->type}}</td>

                <td>
                    <a href="/user/details/{{$user->id}}">Details</a> | 
                    <a href="/user/edit/{{$user->id}}">Edit</a> | 
                    <a href="/user/delete/{{$user->id}}">Delete</a> 
                </td>
            </tr>
    </table>
    
</body>
</html>