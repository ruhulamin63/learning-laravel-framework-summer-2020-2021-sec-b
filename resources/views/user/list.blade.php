<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List Page</title>
</head>
<body>

    <table border="1">
        <tr>
            <th colspan="3">User List</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>EMAIL</th>
            <th>Action</th>
        </tr>

    @foreach($userlist as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>
                <a href="/user/insert/{{$user['id']}}">Insert</a> | 
                <a href="/user/update/{{$user['id']}}">Update</a> | 
                <a href="/user/delete/{{$user['id']}}">Delete</a> 
            </td>
        </tr>
    @endforeach
    </table>
</body>
</html>