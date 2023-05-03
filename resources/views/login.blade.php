{{-- @extends('layout') @section('content')
    <h1>login page</h1>
    <form action="/login" method="post">
        @csrf
        <input type="text" name="phone" placeholder="Phone" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="submit" value="login">
    </form>
@endsection --}}
@extends('layout') @section('content')
    <div class="frm row">
        <div class="col-4">
            <form action="/login" method="post">
                @csrf
                <div class="form-group ">
                    <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phonelHelp"
                        placeholder="شماره تلفن" required>
                    <small id="phoneHelp" class="form-text text-muted">برای وارد شدن شما تلفن خود را که با آن ثبت نام کردید
                        وارد
                        کنید.</small>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" id="password" placeholder="پسورد" required>
                </div>
                <div class="d-flex justify-content-center">
                    <input class="btn btn-outline-success my-btn p-3" type="submit" value="ورود">
                </div>

            </form>
        </div>

    </div>
@endsection
