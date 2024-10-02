<!-- Header -->
<header class="bg-dark text-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/Remove-bg.ai_1726244981686.png') }}" alt="Logo BookStore" width="70">
            </a>
            
            <!-- Nút toggle cho navbar trên màn hình nhỏ -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu navbar -->
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('page.home')}}">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{route('page.shop')}}">
                       Sản Phẩm
                    </a>    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giỏ hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
                
                <!-- Form tìm kiếm -->
                <form class="d-flex" action="search.php" method="GET">
                    <input class="form-control me-2" type="search" name="query" placeholder="Tìm kiếm sách..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Tìm kiếm</button>
                </form>
            </div>
        </nav>
    </div>
</header>
