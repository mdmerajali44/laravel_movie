<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('submit') }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label for="">Move File</label><br>
        <input type="file" name="move_file" ><br>
        <br>
        <label for="">Move image</label><br>
        <input type="file" name="move_img" > <br>
        <br>        
        <label>Move title</label><br>
        <select name="move_title"> 
            <option value="Acction movie">Acction movie</option>
            <option value="Funny Movie">Funny Movie</option>    
        </select><br> <br>        
        <label for="">Movie name:</label> <br>
        <input type="text" name="movie_name" placeholder="Movie name"> <input type="hidden" name="time" value=" ">
        <br>
        <br>
        <label for="">Short description </label><br>
        <input type="text" name="short_description" placeholder="Short_description"> <br>
        <br>
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>