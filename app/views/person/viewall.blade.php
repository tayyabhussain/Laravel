@extends('layout.main')

@section('content')
<table class="pure-table">
    <tr>
        <th>Name</th><th>Email</th><th>Adress</th><th>Phone</th><th>Password</th>
    </tr>
    @foreach ($array as $person)
    <tr>
        <td>{{$person->name}}</td>
        <td>{{$person->email}}</td>
        <td>{{$person->address}}</td>
        <td>{{$person->phone}}</td>
        <td>{{$person->password}}</td>
    </tr>
    @endforeach
    
</table>
@stop