<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <style>
        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .header {
            z-index: 1000;
            position: fixed;
            width: 100%;
        }
    </style>
    <section class="header">
        <nav class="navbar navbar-expand-lg" style="background-color: #1D2951;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home">
                    <img src="{{ asset('assets/img/logofix.png') }}" height="80px" alt=""
                        style="margin-left: 30px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-auto text-center fw-bold"
                        style="--bs-scroll-height: 100px;font-family:Arial, Helvetica, sans-serif; gap: 6rem;">
                        <li class="nav-item">
                            <a class="nav-link active" style="color: #B3BDC8;" aria-current="page"
                                href="/homepage-profile">PROFILE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/homepage-academic" style="color: #B3BDC8;">ACADEMIC MATTERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/homepage-status" style="color: #B3BDC8;">STATUS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/homepage-support" style="color: #B3BDC8;">SUPPORTING FILES</a>
                        </li>
                    </ul>
                    <form class="search-container d-flex" role="search">
                        <input class="form-control me-2" style="background-color: #001833;color: #B3BDC8;" type="search"
                            placeholder="search..." aria-label="Search">
                        <i class="bi bi-search search-icon" style="color: white;" onclick="submitForm()"></i>
                        <style>
                            .search-container {
                                position: relative;
                                display: inline-block;
                            }

                            .search-icon {
                                position: absolute;
                                top: 50%;
                                padding-left: 180px;
                                transform: translateY(-50%);
                                cursor: pointer;
                            }

                            .form-control::-webkit-input-placeholder {
                                color: #B3BDC8;
                            }
                        </style>
                        <!-- Update the button below with the login link -->
                        <a href="/login" class="btn" style="background-color: #2F4D6F;color: #B3BDC8;">Login</a>
                    </form>
                </div>
            </div>
        </nav>
    </section>

    <section class="banner">
        <div class="col-md-12">
            <img src="{{ asset('assets/img/banner.png') }}" class="img-fluid" alt="" style="width: 100%;">
            <div class="d-flex justify-content-center align-items-center"
                style="height: 50px;color: 002147;background-color: #EDAB2D;">
                <h4 class="fw-bold">Our Services</h4>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container row justify-content-center align-items-center mx-auto mt-4">
            <div class="col-md-3">
                <img src="{{ asset('assets/img/S_ACADEMIC.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('assets/img/S_STUDENT.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('assets/img/S_FINANCIAL.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('assets/img/S_GENERAL.png') }}" class="img-fluid" alt="">
            </div>
        </div>
        <div class="border mt-4" style="background-color: #EDAB2D;height: 5px;"></div>
    </section>
    <div class="col-md-12 mt-4">
        <div class="d-flex justify-content-center">
            <h3 class="fw-bold">SERVICES CREW</h3>
        </div>
    </div>
    <section class="crew">
        <div id="carouselExampleIndicators" class="carousel slide mt-4 container">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3 ">
                            <img src="{{ asset('assets/img/crew1.png') }}" class="d-flex img-fluid" height="500px" alt="...">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('assets/img/crew2.png') }}" class="d-flex img-fluid" height="500px" alt="...">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('assets/img/crew3.png') }}" class="d-flex img-fluid" height="500px" alt="...">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('assets/img/crew4.png') }}" class="d-flex img-fluid" height="500px" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/img/crew5.png') }}" class="d-flex img-fluid" height="500px" alt="...">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('assets/img/crew1.png') }}" class="d-flex img-fluid" height="500px" alt="...">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('assets/img/crew2.png') }}" class="d-flex img-fluid" height="500px" alt="...">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('assets/img/crew3.png') }}" class="d-flex img-fluid" height="500px" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/img/crew4.png') }}" class="d-flex img-fluid" height="500px" alt="...">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('assets/img/crew5.png') }}" class="d-flex img-fluid" height="500px" alt="...">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('assets/img/crew1.png') }}" class="d-flex img-fluid" height="500px" alt="...">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('assets/img/crew2.png') }}" class="d-flex img-fluid" height="500px" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="news-event" style="background-color: #D9D9D9;padding-bottom: 100px;">
        <div class="row" style="margin-top: 100px;padding-top: 50px;">
            <div class="col-md-8">
                <h3 class="fw-bold mb-4" style="color: #1D2951;margin-left: 60px;">NEWS <span class="fw-light"
                        style="font-size: 20px;">All
                        News</span></h3>
                <div class="row" style="margin-left: 50px;">
                    <div class="card col-md-4" style="margin-right: 20px;width: 270px;background-color: #D9D9D9;">
                        <img src="{{ asset('assets/img/News_1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fw-bold">Menggali Wawasan Baru dalam pembuatan modeling character 3
                                Dimensi Prodi D-IV Desain
                                Grafis Fakultas Vokasi Pada matakuliah CAD 2
                                (3D Modeling) Praktisi Mengajar.</p>
                            <p class="card-text"><small class="text-muted">23 Oktober 2023</small></p>
                        </div>
                    </div>
                    <div class="card col-md-4" style="margin-right: 20px;width: 270px;background-color: #D9D9D9;">
                        <img src="{{ asset('assets/img/News_2.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fw-bold">Fakultas Vokasi UB melanjutkan kerja sama
                                dengan Management and Science University
                                (MSU) Malaysia untuk kemajuan pendidikan di
                                Indonesia & Malaysia.</p>
                            <p class="card-text"><small class="text-muted">27 Oktober 2023</small></p>
                        </div>
                    </div>
                    <div class="card col-md-4" style="margin-right: 20px;width: 270px;background-color: #D9D9D9;">
                        <img src="{{ asset('assets/img/News_3.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fw-bold">Universitas Brawijaya Memperkenalkan
                                Program 3 in 1 Administrasi Bisnis: “Statistika Bisnis untuk Sukses Bisnis”.</p>
                            <p class="card-text"><small class="text-muted">27 Oktober 2023</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <h3 class="fw-bold mb-4" style="color: #1D2951;">EVENTS <span class="fw-light"
                        style="font-size: 20px;">All
                        News</span></h3>
                <div class="row ">
                    <div class="col-md-2">
                        <div class="card align-items-center"
                            style="height: 50px; width: 40px;background-color: #002147;color: white;">
                            <p class="">20 <br>Okt</p>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <p class="fw-bold">Gebyar Festival Bakso Lippo Plaza Batu Anti Ribet Anti Mahal bersama
                            Mahasiswa
                            MICE Prodi D3 Administrasi Bisnis, Fakultas Vokasi UB</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="card align-items-center"
                            style="height: 50px; width: 40px;background-color: #002147;color: white;">
                            <p class="">11 <br>Apr</p>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <p class="fw-bold">Pembahasan Perjanjian Kerjasama (PKS) antara Fakultas Vokasi Universitas
                            Brawijaya dengan DPMD Kabupaten Tulungagung</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="card align-items-center"
                            style="height: 50px; width: 40px;background-color: #002147;color: white;">
                            <p class="">15 <br>Mar</p>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <p class="fw-bold">Vokasi Jalin Kerjasama Dengan Urayama Gakuen</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" style="background-color:#1D2951">
        <div class="row px-3" style="padding-top: 100px;">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-5">
                        <img class="img-fluid" style="padding-top: 50px;" src="{{ asset('assets/img/ublogo.png') }}" alt="">
                    </div>
                    <div class="col-md-5">
                        <img class="img-fluid" style="padding-top: 50px;" src="{{ asset('assets/img/logo.png') }}" width="175px" alt="">
                    </div>
                    <div class="col-md-2">
                        <div class="garis" style="border-left: 4px solid #EDAB2D;height: 300px;margin-top: 60px;"></div>
                    </div>
                </div>
            </div>
            <div class="row col-md-4">
                <h4 style="color: #EDAB2D;padding-bottom: 20px;">Jam Operasional Layanan</h4>
                <div class="col-md-10">
                    <div class="row" style="color: white;">
                        <div class="col-md-1">
                            <img src="{{ asset('assets/img/arrow-right.svg') }}" height="15px" alt="">
                        </div>
                        <div class="col-md-11">
                            <p>Senin - Jumat 08.00 - 16.00 WIB</p>
                        </div>
                    </div>
                    <div class="row" style="color: white;">
                        <div class="col-md-1">
                            <img src="{{ asset('assets/img/arrow-right.svg') }}" height="15px" alt="">
                        </div>
                        <div class="col-md-11">
                            <p>Cuti Bersama dan Libur Nasional Tutup </p>
                        </div>
                    </div>
                    <div class="row" style="color: white;">
                        <div class="col-md-1">
                            <img src="{{ asset('assets/img/arrow-right.svg') }}" height="15px" alt="">
                        </div>
                        <div class="col-md-10">
                            <p>Maksimal pengunjung 50 Perhari</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="garis" style="border-left: 4px solid #EDAB2D;height: 300px;"></div>
                </div>
            </div>
            <div class="col-md-4">
                <h4 style="color: #EDAB2D;padding-bottom: 20px;">Connect with us</h4>
                <div class="row" style="color: white;">
                    <div class="col-md-1">
                        <img src="{{ asset('assets/img/maps.png') }}" height="15px" alt="">
                    </div>
                    <div class="col-md-11">
                        <p>Jl. Veteran No 12 – 14, Ketawanggede, Malang, Jawa Timur, Indonesia</p>
                    </div>
                </div>
                <div class="row" style="color: white;">
                    <div class="col-md-1">
                        <img src="{{ asset('assets/img/logo_world-wide-web.png') }}" height="15px" alt="">
                    </div>
                    <div class="col-md-11">
                        <p>vokasi.ub.ac.id</p>
                    </div>
                </div>
                <div class="row" style="color: white;">
                    <div class="col-md-1">
                        <img src="{{ asset('assets/img/logo_facebook.png') }}" height="15px" alt="">
                    </div>
                    <div class="col-md-11">
                        <p>Pendidikan Vokasi UB</p>
                    </div>
                </div>
                <div class="row" style="color: white;">
                    <div class="col-md-1">
                        <img src="{{ asset('assets/img/logo_youtube.png') }}" height="15px" alt="">
                    </div>
                    <div class="col-md-11">
                        <p>Fakultas Vokasi Universitas Brawijaya</p>
                    </div>
                </div>
                <div class="row" style="color: white;">
                    <div class="col-md-1">
                        <img src="{{ asset('assets/img/logo_twitter.png') }}" height="15px" alt="">
                    </div>
                    <div class="col-md-11">
                        <p>@VokasiUB</p>
                    </div>
                </div>
                <div class="row" style="color: white;">
                    <div class="col-md-1">
                        <img src="{{ asset('assets/img/logo_instagram.png') }}" height="15px" alt="">
                    </div>
                    <div class="col-md-11">
                        <p>@vokasiub</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" style="background-color:#1D2951;">
        <div class="container-fluid row justify-content-center text-center" style="padding-top: 100px;">
            <div class="garis" style="height: 4px;width: 1200px;background-color: #EDAB2D;"></div>
            <p class="mt-4" style="color: white;">Hak Cipta 2023 © Kelompok 9.1 </p>
        </div>
    </section>
    <div class="whatsapp-float">
        <a href="https://chat.whatsapp.com/IxDWVRG8CN94cDohueV8qp" target="_blank">
            <img src="{{ asset('assets/img/whatsapp.png') }}" alt="WhatsApp" style="width: 60px; height: 60px;">
        </a>
    </div>
</body>

</html>