@extends("layouts.app")
<h1>Image List</h1>
h($imgs as $i)
<style>
table td{
    border:3px black solid;
    border-collapse:collapse;
}
table {
    width:100%;
}
</style>
<div id="table1">

<button>
@component('btn_create')
        @endcomponent
</button>

    <table>
    @foreach($imgs as $i)
        <tr>
            <td {{$i->id}} >
            <button>
            @component('btn_edit')
        @endcomponent
            </button>
            </td>
            <td>
                <a href="/image-manager/{{$i->id}}">{{$i ->url}}</a><br>
                {{$i->filename}}<br>
                {{$i->alt}}
            </td>

            <td><img style="width:50px" src="{{$i->url}}" alt=""></td>

            <td>
            <form action="/image-manager/{{$i->id}}" method="POST">
            @csrf
            @method('DELETE') 
            <button type="submit">
           [[X]]
            </button>
            </form>
            <!--
            @component('btn_delete')
        @endcomponent
        -->
            </td>
       
        </tr>
        @endforeach
    </table>
</div>



