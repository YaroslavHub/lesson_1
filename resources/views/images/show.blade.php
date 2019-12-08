<h1>Image</h1>
<a href="/image-manager">Image Manager</a>
<br>

[[E]] [[X]]




<table>
    <tr>
        <td>
@component('btn_edit')
@endcomponent
</td>
    </tr>
    <tr>
        <td> ID:</td>
        <td>{{$img->id}}</td>
    </tr>

    <tr>
        <td>URL:</td>
        <td>{{$img->url}}</td>
    </tr>

    <tr>
        <td>FILENAME:</td>
        <td> </td>
    </tr>

    <tr colspan="2">
        <td><img src="{{$img->url}}"></td>
    </tr>

    <tr>
        <td>
        <button>
        [[X]]
        </button>
@component('btn_delete')
@endcomponent
</td>
    </tr>
</table>

