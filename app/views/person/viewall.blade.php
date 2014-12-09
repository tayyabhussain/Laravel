@extends('layout.main')

@section('content')

<table class="pure-table">
    <tr>
        <th>Name</th><th>Email</th><th>Adress</th><th>Phone</th><th>Password</th>
        <th>delete</th><th>edit</th>
    </tr>
    @foreach ($array as $person)
    <tr>
        <td>{{$person->name}}</td>
        <td>{{$person->email}}</td>
        <td>{{$person->address}}</td>
        <td>{{$person->phone}}</td>
        <td>{{$person->password}}</td>
    <form action="{{URL::route('person-delete')}}" method="post">
        <td><input type="submit" value="delete" name="{{$person->id}}"/></td>
    </form>
    <form action="{{URL::route('person-edit')}}" method="get">
        <td><input type="submit" value="edit" name="{{$person->id}}"/></td>
    </form>
</tr>
@endforeach
</table>

@stop