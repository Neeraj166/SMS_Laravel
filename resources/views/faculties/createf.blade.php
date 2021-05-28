<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Faculty</title>
</head>
<body>
    <h1>Create Faculty</h1>

    <form action="{{ route('faculty.store') }}" method="post" >
            @csrf
            <table>           

                <td>Faculty:</td>
                <td>
                    <input type="text" name="faculty" >
                </td>
            </tr>                       
            <tr>  <td>
                <input type ="submit" value="ADD" name ="add">
                </td>
            </tr>
            </table>
 </form>
</body>
</html>