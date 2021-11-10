<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('tambah-iklan') }}" method="post">
        @csrf
        <textarea name="iklan" id="" cols="30" rows="10">Masukan Link Iklan / Masukan dengan tag HTML</textarea>
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>