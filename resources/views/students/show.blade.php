<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of students</title>
</head>
<body>
<table border="1">
<thead><th>Sn</th>
<th>Name</th>
<th>Roll No</th>
<th>Address</th>
<th>Faculty</th>
<th>Status</th>
<th colspan="2">Operation</th></thead>
    @foreach($abc as $student)
    
        <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->roll}}</td>
        <td>{{$student->address}}</td>
        <td>{{$student->faculty}}</td>
        <td>{{$student->status}}</td>
        <td><a href="{{route('students.edit',$student->id)}}">Edit</a></td>
        <td><a href="{{route('delete',$student->id)}}">Delete</a></td>
        </tr>
    
    @endforeach
</table>
</body>
</html>