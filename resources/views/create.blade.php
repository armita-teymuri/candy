@extends('layout') @section('content')
    <h1>اضافه کردن محصول جدید</h1>
    <hr />
    <form class="frm" action="/create" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="imagefile" required />
        <input type="text" name="name" placeholder="نام شیرینی" required />
        <input type="text" name="desc" placeholder="توضیحات" required />
        <input type="number" name="price" placeholder="قیمت" required />
        <input type="number" name="amount" placeholder="موجودی انبار" required />
        <select name="type" id="type" required>
            <option value="1">کیلو گرم</option>
            <option value="2">دونه</option>
            <option value="3">جعبه</option>
        </select>
        <input type="submit" value="اضافه کردن">
    </form>
@endsection
