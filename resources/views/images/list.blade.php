@extends("layouts.app")
<h1>Image List</h1>
<style>
table, td{
border:3px black solid;
border-collapse:collapse;
}
</style>
@foreach($imgs as $i)

<div id="table1">
    <table>
        <tr>
            <td {{$i->id}} ><button>[EDIT]</button></td>
            <td>
                <a href="/image-manager/{{$i->id}}">{{$i ->url}}</a></br>
                {{$i->filename}}</br>
                {{$i->alt}}
            </td>
            <td><img id="img23" style="width:150px;height:150px" src="{{$i ->url}}" alt=""></td>
            <td><button>[DELETE]</button></td>
        </tr>
    </table>
</div>

@endforeach

