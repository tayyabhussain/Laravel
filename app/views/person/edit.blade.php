@extends('layout.main')

@section('content')
<?php 
if(Session::has('mysession'))
{
    echo Session::pull('mysession');
}
?>
<form action="{{URL::route('person-edit-post') }}" method="post" class="pure-form pure-form-stacked">
    Name
    <input type="text" name="name" value="{{$person->name }}"/>
    @if($errors->has('name'))
        {{$errors->first('name')}}
    @endif
</div>
<div class="field">
    Email
    <input type="text" name="email" value="{{$person->email}}"/>
    @if($errors->has('email'))
        {{$errors->first('email')}}
    @endif
</div>
<div class="field">
    Address
    <input type="text" name="address" value="{{$person->address}}"/>
    @if($errors->has('address'))
        {{$errors->first('address')}}
    @endif
</div>
<div class="field">
    Password
    <input type="password" name="password" />
    @if($errors->has('password'))
        {{$errors->first('password')}}
    @endif
</div>
<div class="field">
    Phone       <input type="text" name="phone" value="{{$person->phone}}"/>
    @if($errors->has('phone'))
        {{$errors->first('phone')}}
    @endif
</div>
<input type="submit" value="Save" class="btn" />
{{Form::token()}}
</form>
@endsection

