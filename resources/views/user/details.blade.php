<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User details</title>
</head>
<body>
    <table border="1" align="center">
    <tr>
            <th colspan="4">User List</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>EMAIL</th>
            <th>Action</th>
        </tr>

        @foreach($userlist as $user)
         @if($user['id'] == $id)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
      
            <td>
                <a href="/user/details/{{$user['id']}}">Details</a> | 
                <a href="/user/update/{{$user['id']}}">Update</a> | 
                <a href="/user/delete/{{$user['id']}}">Delete</a> 
            </td>
        </tr>
        @endif
       @endforeach
    </table>
    
</body>
</html>