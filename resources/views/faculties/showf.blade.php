<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Faculty</title>
</head>
<body>
<table border="1">
<thead><th>Sn</th>
<th>Faculty</th>
<th colspan="2">Operation</th></thead>
    @foreach($abc as $faculty)
    
        <tr>
        <td>{{$faculty->fid}}</td>
        <td>{{$faculty->faculty}}</td>
        <td><a href="{{route('faculty.edit',$faculty->fid)}}">Edit</a></td>
        </tr>
    
    @endforeach
</table>
</body>
</html>