@extends('layout')
@section('title')
Trang chủ
@endsection
@section('content')
<!-- Banner -->
<section class="bg-primary text-center text-white py-5">
        <h1>Giảm giá khủng!</h1>
        <p>Nhận ưu đãi ngay hôm nay với những tựa sách mới nhất</p>
    </section>
<div class="container-fluid" >
    <div class="row">
    @foreach ($books as $book)
        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100" style="width: 18rem;">
    <img src="{{ $book->thumbnail }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Tên: {{ $book->title }}</h5>
        <p class="card-text">Giá: {{ $book->Price }}</p>
        <a href="{{ route('page.detail', $book->id) }}" class="btn btn-primary">Chi tiết</a>
    </div>
    </div> 
    </div>
    @endforeach
    </div>
</div>
@endsection