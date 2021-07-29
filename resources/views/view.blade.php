<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data ManyToMany</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <br>
    <br>
    <h3> Member Data </h3>
    <br>
    <table class="table table-bordered">
        <tr>
            <td>S.no</td>
            <td>Name</td>
            <td>Role</td>
        </tr>
        @if(isset($member))
        @foreach($member as $players)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$players->name}}</td>
            @foreach($players->role as $roles)
            <td>{{$roles->roles}}</td>
            @endforeach
        </tr>
        @endforeach
        @endif

        @if(isset($roles))
        @foreach($roles as $players)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$players->roles}}</td>
            @foreach($players->member as $roles)
            <td>{{$roles->name}}</td>
            @endforeach
        </tr>
        @endforeach
        @endif

    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>