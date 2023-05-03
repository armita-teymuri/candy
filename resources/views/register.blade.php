@extends('layout') @section('content')
    <h1>register page</h1>
    <form action="/register" method="post">
        @csrf
        <input type="text" name="name" placeholder="name" required />
        <input type="text" name="phone" placeholder="Phone" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="submit" value="Register">
    </form>
@endsection
