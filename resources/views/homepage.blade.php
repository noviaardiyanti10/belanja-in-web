<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=SF+Pro+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg p-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">

                <form class="form-inline mx-auto" role="search">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Cari parfum kesukaanmu"
                            aria-label="Search">
                        <div class="search-icon my-2 align-item-center">
                            <img src="{{ asset('icon/search.png') }}" alt="search-icon">
                        </div>
                    </div>

                </form>

                <div>
                    <button class="btn btn-login">MASUK</button>
                    <button class="btn btn-regis">DAFTAR</button>
                </div>

            </div>
        </div>
    </nav>

    <div class="container w-100 min-vh-100">
        <header>
            <div id="carouselExampleIndicators" class="carousel slide mt-5">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/banner.png') }}" class="d-block w-100" alt="banner">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/banner.png') }}" class="d-block w-100" alt="banner">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/banner.png') }}" class="d-block w-100" alt="banner">
                    </div>
                </div>

                <button class="carousel-control-prev carousel-control" type="button"
                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next carousel-control" type="button"
                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </header>

        <body>
            <div class="mt-3">
                <div class="mb-3">
                    <h4 class="fw-bold">Terbaru</h4>
                </div>
                <div class="cards mb-5">
                    <div class="row row-cols-5">
                        @foreach ($productLatest as $product)
                        <div class="col mb-3">
                            <div class="mx-2">
                                <div class="card">
                                    <img class="my-3 mx-4 px-3" src="{{ $product->photo }}" alt="{{ $product->name }}">
                                    <div class="card-body mb-3">
                                        <h6 class="card-title fw-bolder">{{ $product->name }}</h6>
                                        <p class="card-text text-primary-emphasis">IDR {{ number_format($product->price,2, ",", ".") }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <div class="mb-3">
                    <h4 class="fw-bold">Produk Tersedia</h4>
                </div>
                <div class="cards mb-5">
                    <div class="row row-cols-5">
                        @foreach ($products as $product)
                        <div class="col mb-3">
                            <div class="mx-2">
                                <div class="card">
                                    <img class="my-3 mx-4 px-3" src="{{ $product->photo }}" alt="{{ $product->name }}">
                                    <div class="card-body mb-3">
                                        <h6 class="card-title fw-bolder">{{ $product->name }}</h6>
                                        <p class="card-text text-primary-emphasis">IDR {{ number_format($product->price,2, ",", ".") }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-center">
                    <button class="btn btn-more text-primary-emphasis">Lihat lebih banyak</button>
                </div>

            </div>
        </body>

        <hr class="mt-5 text-secondary">

        <footer">
            <div class="container pt-5 mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center align-items-center img-logo">
                            <img src="{{ asset('images/logo.png') }}" alt="logo">
                        </div>
                        <p class="desc text-center mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                            commodo
                            in vestibulum, sed dapibus tristique nullam.</p>
                        <div class="d-flex justify-content-center social-media">
                            <img src="{{ asset('icon/facebook.png') }}" alt="logo">
                            <img src="{{ asset('icon/twitter.png') }}" class="mx-4" alt="logo">
                            <img src="{{ asset('icon/instagram.png') }}" alt="logo">

                        </div>
                    </div>

                    <div class="col-md-2">
                        <h5 class="pb-4 fw-normal">Layanan</h5>
                        <div class="sub-menu">
                            <p>BANTUAN</p>
                            <p>TANYA JAWAB</p>
                            <p>HUBUNGI KAMI</p>
                            <p>CARA BERJUALAN</p>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <h5 class="pb-4 fw-normal">Tentang Kami</h5>
                        <div class="sub-menu">
                            <p>ABOUT US</p>
                            <p>KARIR</p>
                            <p>BLOG</p>
                            <p>KEBIJAKAN PRIVASI</p>
                            <p>SYARAT DAN KETENTUAN</p>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <h5 class="pb-4 fw-normal">Mitra</h5>
                        <div class="sub-menu">
                            <p>SUPPLIER</p>
                        </div>
                    </div>


                </div>
            </div>

        </footer>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
