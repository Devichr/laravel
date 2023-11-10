@extends('index')
@section('konten')

    <div class="card">
        <div class="card-header">Register Form | <a href="login">Login</a></div>
        <div class="card-body">

            <form action= "register" method="post">
             {!! csrf_field() !!}
            <label>First Name</label>
            <input type="text" name="name" id="name" class ="form-control"> </br>


            <label>Email</label>
            <input type="email" name="email" id="email" class ="form-control"> </br>

            <input type="hidden" name="level" id="level" class="form-control" value="student">


            <label>Password</label>
            <input type="password" name="password" id="password" class ="form-control"> </br>
            <input type="submit" value="Save" class="btn btn-success">

            </form>
        </div>
    </div>

@stop
