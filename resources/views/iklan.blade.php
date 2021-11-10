<!DOCTYPE html>
<html lang="en">
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Iklan</h1>
<h2><a href="{{ route('iklan') }}">Tambah Data</a></h2><h2><a href="/home">Kembali Ke home</a></h2>
</form>
    <table id="t01">
  <tr>
        <th>Link Iklan</th>
  </tr>
  @foreach($listIklan as $i)
  
  <tr>
        <td>{!! $i->link_iklan !!}</td>
        <td>
            <a href="{{ route('hapus-iklan',$i->id) }}">Hapus</a>
        </td>
  </tr>
  @endforeach
  </table>

  
  

</body>
</html>