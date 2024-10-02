@extends('layout')
@section('title')
Trang chủ
@endsection
@section('content')
    <!-- Banner -->
    <section class="bg-primary text-center text-white py-5">
        <h1>Giảm giá khủng!</h1>
        <p>Nhận ưu đãi ngay hôm nay với những tựa sách mới nhất</p>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/1.jpg" class="d-block w-100" alt="...">
                </div>
            <div class="carousel-item">
                <img src="images/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    </section>

    <!-- Danh mục sách -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="border p-4">
                        <h3>Văn học</h3>
                        <a href="{{route('page.shop')}}" class="btn btn-primary mt-3">Xem thêm</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="border p-4">
                        <h3>Kinh tế</h3>
                        <a href="{{route('page.shop')}}" class="btn btn-primary mt-3">Xem thêm</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="border p-4">
                        <h3>Thiếu nhi</h3>
                        <a href="{{route('page.shop')}}" class="btn btn-primary mt-3">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sách nổi bật -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Sách Nổi Bật</h2>
            <div class="row">
                <!-- Sách 1 -->
                @foreach ($bookdesc as $desc)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ $desc->thumbnail }}" class="card-img-top" alt="Sách 1">
                        <div class="card-body">
                            <h5 class="card-title">{{ $desc->title }}</h5>
                            <p class="card-text">{{ $desc->Price }}đ</p>
                        </div>
                        <div class="card-footer">
                            <a href="detail.blade.php?id=1" class="btn btn-primary w-100">Xem chi tiết</a>
                        </div>
                    </div>
                </div>                          
                @endforeach
                <!-- Sách 2 -->
               
            </div>
        </div>
    </section>
@endsection
