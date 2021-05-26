<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
</head>
<body>
    <h1>Create Student</h1>

    <form action="create" method="POST" >
            @csrf
            <table>           
            <tr>
               <td>Name:</td>
               <td>
               <input type="text" name="name" >
               </td>
            <tr>
                <td>Roll No:</td>
                <td>
                    <input type="text" name="roll" >
                </td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>
                    <input type="text" name="address">
                </td>
            </tr>
                <td>Faculty:</td>
                <td>
                    <input type="text" name="faculty" >
                </td>
            </tr>               
           <tr>
                <td>Status:</td>
                <td>
                    <input type="text" name="status" >
                </td>
            </tr>
            <tr>            
            <tr>  <td>
                <input type ="submit" value="ADD" name ="add">
                </td>
            </tr>
            </table>
 </form>
</body>
</html>