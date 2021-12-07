<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('tambah-iklan') }}" method="post" enctype="multipart/form-data">
        @csrf
        <textarea name="iklan" id="" cols="30" rows="10" placeholder="Masukan Link Iklan / Masukan dengan tag HTML"></textarea>
        <input type="file" name="video">

        <button type="submit">Submit</button>
    </form>
    
</body>
</html>