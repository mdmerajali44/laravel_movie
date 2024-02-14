<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('webhomesubmit') }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label for="">Web File:</label><br>
        <input type="file" name="web_file" ><br>       
        <br>
        <label for="">Movie Name:</label><br>
        <input type="text" name="movie_name" placeholder="Movie name"> <br>
        <br>
        <label for="">Part:</label><br>
        <input type="text" name="movie_part" placeholder="Move part"> <br>
        <br>
        <label for="">Arrival date:</label><br>
        <input type="text" name="arrival_date" placeholder="Arrival date"> <br>
        <br>
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>