
<h1>Image Creation</h1>

<form enctype="multipart/form-data" action="/image-manager" method="POST">
@csrf
<label for="im_title">
Title
</label>
<input type="text" name="im_title" id="im_title">
<br>

<label for="im_alt">
Alternative
</label>
<input type="text" name="im_alt" id="im_alt">
<br>

<label for="im_file">
Title
</label>
<input type="file" name="im_file" id="im_file">
<br>
<input type="submit">
</form>
