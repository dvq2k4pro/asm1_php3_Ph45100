@extends('layout')
@section('title')
Trang chủ
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Cột chứa hình ảnh sản phẩm -->
        <div class="col-md-6">
            <div class="card">
                <img src="{{ $book->thumbnail }}" class="card-img-top img-fluid" alt="Tên sản phẩm">
            </div>
        </div>

        <!-- Cột chứa chi tiết sản phẩm -->
        <div class="col-md-6">
            <h1 class="display-4">Tên sản phẩm{{ $book->title }}</h1>
            <p class="lead">Tác giả: {{ $book->author }}</p>
            <h3 class="text-success">Giá: {{ $book->Price }}</h3>

            <div class="mt-4">
                <h5>Mô tả sản phẩm:</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aut sapiente numquam iure odio, possimus eum quae dolorem suscipit cum laboriosam facere eligendi libero maiores delectus repellat natus. Ipsam, perferendis.
                </p>
            </div>

            <div class="d-grid gap-2 mt-4">
                <button class="btn btn-primary btn-lg" type="button">Thêm vào giỏ hàng</button>
                <button class="btn btn-outline-secondary" type="button"><a href="{{route('page.shop')}}">Quay lại</a></button>
            </div>
        </div>
    </div>
    <!--thêm-->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Sách Nổi Bật</h2>
            <div class="row">
                <!-- Sách 1 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/Remove-bg.ai_1726244981686.png') }}" class="card-img-top" alt="Sách 1">
                        <div class="card-body">
                            <h5 class="card-title">???</h5>
                            <p class="card-text">???đ</p>
                        </div>
                        <div class="card-footer">
                            <a href="detail.blade.php?id=1" class="btn btn-primary w-100">Xem chi tiết</a>
                        </div>
                    </div>
                </div>                          
                <!-- Sách 2 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/Remove-bg.ai_1726244981686.png') }}" class="card-img-top" alt="Sách 1">
                        <div class="card-body">
                            <h5 class="card-title">???</h5>
                            <p class="card-text">???đ</p>
                        </div>
                        <div class="card-footer">
                            <a href="detail.blade.php?id=1" class="btn btn-primary w-100">Xem chi tiết</a>
                        </div>
                    </div>
                </div>                          
                <!-- Sách 2 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/Remove-bg.ai_1726244981686.png') }}" class="card-img-top" alt="Sách 1">
                        <div class="card-body">
                            <h5 class="card-title">???</h5>
                            <p class="card-text">???đ</p>
                        </div>
                        <div class="card-footer">
                            <a href="detail.blade.php?id=1" class="btn btn-primary w-100">Xem chi tiết</a>
                        </div>
                    </div>
                </div>                          
                <!-- Sách 3 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/Remove-bg.ai_1726244981686.png') }}" class="card-img-top" alt="Sách 1">
                        <div class="card-body">
                            <h5 class="card-title">???</h5>
                            <p class="card-text">???đ</p>
                        </div>
                        <div class="card-footer">
                            <a href="detail.blade.php?id=1" class="btn btn-primary w-100">Xem chi tiết</a>
                        </div>
                    </div>
                </div>                          
                <!-- Sách 4 -->
               
            </div>
        </div>
    </section>
</div>
@endsection