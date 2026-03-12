<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cibaduyut Shoes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ assets('css/style.css') }}" />
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand">CIBADUYUT SHOES</a>

            <div class="ms-auto">

                <button
                    class="btn btn-outline-warning btn-sm me-2"
                    data-bs-toggle="modal"
                    data-bs-target="#wishlistModal"
                    onclick="tampilkanWishlist()"
                >
                    ⭐ Wishlist (<span id="wishlist-count">0</span>)
                </button>

                <button id="btn-theme" class="btn btn-outline-light btn-sm me-2">
                    Mode Gelap
                </button>

                <a href="controller/logout.php" class="btn btn-danger btn-sm">
                    Logout
                </a>

            </div>

        </div>
    </nav>

    <!-- HERO -->
    <section class="hero text-white">
        <div class="container text-center">
            <h2>Sistem Manajemen Sepatu</h2>
            <p class="lead">Sepatu impian dari koleksi eksklusif</p>
        </div>
    </section>

    <!-- PRODUK -->
    <div class="container my-4">

        <h4 class="mb-3">Daftar Sepatu</h4>

        <div class="row g-4">

            <!-- PRODUK 1 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="images/NIKE_P_6000.jpg" class="card-img-top">

                    <div class="card-body">

                        <h6 class="card-title">Nike P-6000</h6>

                        <p>Harga: Rp 1.299.000</p>

                        <p class="text-muted stok-text">Stok: 10</p>

                        <div class="d-flex">

                            <button class="btn btn-primary btn-detail w-50 me-2">
                                Beli
                            </button>

                            <button class="btn btn-outline-danger btn-wishlist w-50">
                                ❤️ Wishlist
                            </button>

                        </div>

                    </div>
                </div>
            </div>

            <!-- PRODUK 2 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="images/AIR_FORCE_1.jpg" class="card-img-top">

                    <div class="card-body">

                        <h6 class="card-title">Nike Air Force 1</h6>

                        <p>Harga: Rp 1.599.000</p>

                        <p class="text-muted stok-text">Stok: 7</p>

                        <div class="d-flex">

                            <button class="btn btn-primary btn-detail w-50 me-2">
                                Beli
                            </button>

                            <button class="btn btn-outline-danger btn-wishlist w-50">
                                ❤️ Wishlist
                            </button>

                        </div>

                    </div>
                </div>
            </div>

            <!-- PRODUK 3 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="images/AIR_JORDAN_1_LOW.jpg" class="card-img-top">

                    <div class="card-body">

                        <h6 class="card-title">Nike Air Jordan 1 Low</h6>

                        <p>Harga: Rp 1.799.000</p>

                        <p class="text-muted stok-text">Stok: 19</p>

                        <div class="d-flex">

                            <button class="btn btn-primary btn-detail w-50 me-2">
                                Beli
                            </button>

                            <button class="btn btn-outline-danger btn-wishlist w-50">
                                ❤️ Wishlist
                            </button>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <small>© 2026 Cibaduyut Shoes</small>
    </footer>


    <!-- MODAL WISHLIST -->
    <div class="modal fade" id="wishlistModal">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title">Wishlist</h5>

                    <button class="btn-close" data-bs-dismiss="modal"></button>

                </div>

                <div class="modal-body">

                    <ul class="list-group" id="wishlist-list"></ul>

                </div>

            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="script.js"></script>

</body>
</html>