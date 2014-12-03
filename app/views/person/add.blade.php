@extends('layout.main')

@section('content')
<form action={{URL::route('person-add-post')}} method="post">
    <div class="field">
        Name
        <input type="text" name="name" />
        @if($errors->has('name'))
            {{$errors->first('name')}}
        @endif
    </div>
    <div class="field">
        Email
        <input type="text" name="email" />
        @if($errors->has('email'))
            {{$errors->first('email')}}
        @endif
    </div>
    <div class="field">
        Address
        <input type="text" name="address" />
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
        Phone       <input type="text" name="phone" />
        @if($errors->has('phone'))
            {{$errors->first('phone')}}
        @endif
    </div>
    <input type="submit" value="Add Person" />
    {{Form::token()}}
    
</form>
@stop