<h1>Image Edition</h1>

<form enctype="multipart/form-data" action="/image-manager/{{$img->id}}" method="POST">
@method('PATCH')
@csrf

<label for = "name_alt"> 
Title
</label>
<input type = "text" name = "name_alt" id="name_alt" value="{{$img->alt}}">
<br>

<label for = "name_file">
filename
</label>
<input type = "text" name = "name_file" id="name_file" value="{{$img->filename}}">
<br>

<label for = "name_url">
url
</label>
<input type = "text" name = "name_url" id="name_url" value="{{$img->url}}">
<br>
<button type="submit">Редагувати</button>
</form>
