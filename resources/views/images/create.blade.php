
<h1>Image Creation</h1>

<form enctype="multipart/form-data" action="/image-manager" method="POST">
@csrf
<label for="im_title">
Title
</lable>
<input type="text" name="im_title" id="im_title"></input>
<br>

<label for="im_alt">
Alternative
</lable>
<input type="text" name="im_alt" id="im_alt"></input>
<br>

<label for="im_file">
Title
</lable>
<input type="file" name="im_file" id="im_file"></input>
<br>
<input type="submit">
</form>
