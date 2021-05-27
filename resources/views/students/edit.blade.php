<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>

    <form action="{{ route('students.update',$student->id) }}" method="POST" >
            @csrf
            @method('PUT')
            <table>           
            <tr>
               <td>Name:</td>
               <td>
               <input type="text" name="name" value="{{$student->name}}" >
               </td>
            <tr>
                <td>Roll No:</td>
                <td>
                    <input type="text" name="roll" value="{{$student->roll}}"  >
                </td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>
                    <input type="text" name="address" value="{{$student->address}}">
                </td>
            </tr>
                <td>Faculty:</td>
                <td>
                    <input type="text" name="faculty" value="{{$student->faculty}}" >
                </td>
            </tr>               
           <tr>
                <td>Status:</td>
                <td>
                    <input type="text" name="status"  value="{{$student->status}}">
                </td>
            </tr>
            <tr>            
            <tr>  <td>
                <input type ="submit" value="UPDATE" >
                </td>
            </tr>
            </table>
 </form>
</body>
</html>