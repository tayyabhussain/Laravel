@extends('layout.main')

@section('content')
<form action="{{URL::route('person-delete')}}" method="post">
    <table class="pure-table">
        <tr>
            <th>Name</th><th>Email</th><th>Adress</th><th>Phone</th><th>Password</th>
            <th>delete</th>
        </tr>
        @foreach ($array as $person)
        <tr>
            <td>{{$person->name}}</td>
            <td>{{$person->email}}</td>
            <td>{{$person->address}}</td>
            <td>{{$person->phone}}</td>
            <td>{{$person->password}}</td>
            <td><input type="submit" value="delete" name="{{$person->id}}"/></td>
        </tr>
        @endforeach

    </table>
</form>
@stop