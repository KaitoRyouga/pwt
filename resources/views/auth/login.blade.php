@extends('layouts.template')
@section('content')
<div class="card">
    <div class="card-header">Login</div>
    <div class="card-body ">
        <form class="col-md-6" action="/login" method="post">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
        </form>
    </div>
    <div class="card-footer">

    </div>
    @endsection