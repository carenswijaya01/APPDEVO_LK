<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUTAN</title>
</head>
<body>
   <form method="POST" action="{{route('points.store')}}">
@csrf
<br/>INPUTAN</br>
<br/>
<!-- 
admin_id : <input type="text" name="admin_id"><br/>
user_id : <input type="text" name="user_id"><br/>
file : <input type="file" name="file"><br/>
type_point_id : <input type="text" name="type_point_id"><br/>
<select id="points" name="po"> 
        </select><br>
point : <input type="text" name="point"><br/> -->

<input type="hidden" name="admin_id" value=""><br/>
<input type="hidden" name="user_id" value=""><br/>
file : <input type="file" name="file"><br/>
type_point_id : 
<!-- <input type="text" name="type_point_id"><br/> -->
<select name="type_point_id"> 
	<option value="1">JUMLAH POINT</option>
	<option value="2">TIPE POINT</option>
	<option value="3">NIM</option>      
</select><br>
point : <input type="number" name="point"><br/>
<button type="submit">Simpan</button>
   </form> 
</body>
</html>
