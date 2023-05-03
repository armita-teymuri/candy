@extends('layout') @section('content')
    <h1>edit page</h1>
    <hr />
    <form class="frm" action="/update" method="POST" enctype="multipart/form-data">
        @csrf
        <img src="{{ url('/uploads/' . $candy->image) }}" alt="">
        <input type="file" name="imagefile" required />
        <input type="hidden" class="btn btn-primary" name="id" value="{{ $candy->id }}">
        <input type="text" name="name" placeholder="نام شیرینی" value="{{ $candy->name }}" required />
        <input type="text" name="desc" placeholder="توضیحات" value="{{ $candy->desc }}" required />
        <input type="number" name="price" placeholder="قیمت" value="{{ $candy->price }}" required />
        <input type="number" name="amount" placeholder="موجودی انبار" value="{{ $candy->amount }}" required />
        <select name="type" id="type" required>
            <option value="1" {{ $candy->type == 1 ? 'selected' : '' }}>کیلو گرم</option>
            <option value="2" {{ $candy->type == 2 ? 'selected' : '' }}>دونه</option>
            <option value="3" {{ $candy->type == 1 ? 'selected' : '' }}>جعبه</option>
        </select>
        <input type="submit" value="ویرایش">
    </form>
@endsection
