@extends('layout') @section('content')
    @guest
        <div class="welcom">
            <h2>به فروشگاه شیرینی گلچین خوش آمدید. لطفا برای خرید شرینی ها ابتدا لاگین کنید:)</h2>
            <div>
                <a class="btn btn-outline-success my-btn" href="/login">ورود</a>
                <a class="btn btn-outline-success my-btn" href="/register">ثبت نام</a>
            </div>

        </div>
    @else
        <div class="welcom">
            <h2> {{ Auth::user()->name }} عزیز به فروشگاه شیرینی گلچین خوش اومدی:)</h2>
            <div>
                <a class="btn btn-outline-success my-btn" href="/logout">خروج</a>
                @if (Auth::user()->role == 2)
                    <h3>شما با دسترسی مدیر وارد شدید</h3>
                    <a class="btn btn-outline-success my-btn mb-3" href="/create">اضافه کردن محصول جدید</a>
                @else
                    <a class="btn btn-outline-success my-btn mb-3" href="/basket">سبد خرید</a>
                @endif
            </div>

        </div>

    @endguest
    @php
        const TYPES = [1 => 'KG', 2 => 'دونه', 3 => 'جعبه'];
    @endphp


    <div class="row">
        @foreach ($candies as $candy)
            <div class="col-sm-12 col-md-6 col-lg-3 p-0 mt-3 d-flex">
                <div class="card d-flex justify-content-between" style="width: 17rem;">
                    <img class="card-img-top" src="{{ url('/uploads/' . $candy->image) }}" alt="Card image cap"
                        style="  min-height: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $candy->name }}</h5>
                        <p class="card-text">{{ $candy->desc }}</p>
                        <p class="card-text">{{ $candy->price }}</p>
                        <div d-flex>
                            @if (Auth::user() != null && Auth::user()['role'] == 2)
                                <form action="/delete" method="post">
                                    @csrf
                                    <input type="hidden" class="btn btn-primary" name="id"
                                        value="{{ $candy->id }}">
                                    <input type="submit" class="btn btn-primary" value="حذف">
                                </form>
                                <a class="btn btn-primary text-white" href="/edit/{{ $candy->id }}">ویرایش</a>
                            @elseif(Auth::user() != null && Auth::user()['role'] == 1)
                                <button class="btn btn-primary">خرید</button>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
