<h1>Image Edition</h1>

<form enctype="multipart/form-data" action="/image-manager/{{$img->id}}" method="POST">
@method('PUT')
@csrf

<label for = "name_alt"> 
alt
</label>
<input type = "text" name = "name_alt" id="name_alt" value="{{$img->alt}}">
<br>

<label for = "name_alternative">
filename
</label>
<input type = "text" name = "name_alternative" id="name_alternative" value="{{$img->filename}}">
<br>

<label for = "name_url">
url
</label>
<input type = "text" name = "name_url" id="name_url" value="{{$img->url}}">
<br>
<button type="submit">Редагувати</button>
</form>
