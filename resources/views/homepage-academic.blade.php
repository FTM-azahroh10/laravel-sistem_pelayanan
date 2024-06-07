<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      Academic
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
  <style>
    .container-news {
        margin-left: 40px;
        width: 100%;
    }

    .news-event {
        background-color: #D9D9D9;
        padding-bottom: 100px;
    }

    .news-card {
        background-color: inherit;
        border: none;
        margin-bottom: 20px;
    }

    /* Tambahkan margin antara setiap card */
    .news-card:not(:last-child) {
        margin-bottom: 10px; /* Atur ukuran gap yang diinginkan di sini */
    }
    .whatsapp-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
    }
    .header{
      z-index: 1000;
      position: fixed;
      width: 100%;
    }
  </style>
    <section class="header">
        <nav class="navbar navbar-expand-lg" style="background-color: #1D2951;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home">
                    <img src="{{ asset('assets/img/logofix.png') }}" height="80px" alt="" style="margin-left: 30px;">
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
    </section><br><br>
    <section class="centered-section" style="margin-left: 370px;">
      <div style="display: flex; width: 80%; align-items: center; gap: 20px;">
        <h1 style="font-weight: 700; font-family: Georgia, 'Times New Roman', Times, serif;">Academic Matters</h1>
        <p style="margin-left: 100px; width: 550px; font-weight: bolder; font-size: 20px;">Access to study-related information including resources, 
          handbooks and progression forms, examinations, 
          submissions and results, student conduct regulations 
          and disciplinary procedures, the complaints and 
          appeals process, and a University regulations listing.</p>
      </div>
    </section><br><br>
    <div class="d-flex justify-content-center align-items-center"
                style="height: 8px;color: 002147;background-color: #001833; width: 70%; margin-left: 270px;">
    </div><br>
    <section class="news-event" style="background-color: white; padding-bottom: 20px; padding-top: 40px; display: flex; margin-left: 80px;">
      <div class="container-news">
          <div style="display: flex; gap: 70px;">
            <div>
              <div class="card news-card" style="width: 320px">
                <img src="{{ asset('assets/img/News_1.png') }}" class="card-img-top" alt="..."><br>
                <h5 class="card-title fw-bold">Vocanews</h5>
                <p class="card-text">Menggali Wawasan Baru dalam pembuatan modeling character 3 Dimensi Prodi D-IV Desain
                          Grafis Fakultas Vokasi Pada matakuliah CAD 2
                          (3D Modeling) Praktisi Mengajar.</p>
                <p class="card-text"><small class="text-muted">23 Oktober 2023</small></p>
                </div>
            </div>
            <div>
              <div class="card news-card" style="width: 320px;">
                        <img src="{{ asset('assets/img/News_2.png') }}" class="card-img-top" alt="..."><br>
                        <h5 class="card-title fw-bold">Vocanews</h5>
                        <p class="card-text">Fakultas Vokasi UB melanjutkan kerja sama 
                          dengan Management and Science University 
                          (MSU) Malaysia untuk kemajuan pendidikan di 
                          Indonesia & Malaysia.</p>
                        <p class="card-text"><small class="text-muted">27 Oktober 2023</small></p>
                </div>
            </div>
            <div>
              <div class="card news-card" style="width: 320px;">
                <img src="{{ asset('assets/img/News_3.png') }}" class="card-img-top" alt="..."><br>
                <h5 class="card-title fw-bold">Vocanews</h5>
                <p class="card-text">Universitas Brawijaya Memperkenalkan 
                  Program 3 in 1 Administrasi Bisnis: “Statistika Bisnis untuk Sukses Bisnis”.</p>
                <p class="card-text"><small class="text-muted">27 Oktober 2023</small></p>
                </div>
            </div>
            <div>
              <div class="card news-card" style="width: 320px;">
                <img src="{{ asset('assets/img/News_3.png') }}" class="card-img-top" alt="..."><br>
                <h5 class="card-title fw-bold">Vocanews</h5>
                <p class="card-text">Universitas Brawijaya Memperkenalkan 
                  Program 3 in 1 Administrasi Bisnis: “Statistika Bisnis untuk Sukses Bisnis”.</p>
                <p class="card-text"><small class="text-muted">27 Oktober 2023</small></p>
                </div>
            </div>
          </div>
          <div style="display: flex; gap: 70px;">
            <div>
              <div class="card news-card" style="width: 320px;">
                <img src="{{ asset('assets/img/News_3.png') }}" class="card-img-top" alt="..."><br>
                <h5 class="card-title fw-bold">Vocanews</h5>
                <p class="card-text">Universitas Brawijaya Memperkenalkan 
                  Program 3 in 1 Administrasi Bisnis: “Statistika Bisnis untuk Sukses Bisnis”.</p>
                <p class="card-text"><small class="text-muted">27 Oktober 2023</small></p>
                </div>
            </div>
            <div>
              <div class="card news-card" style="width: 320px;">
                <img src="{{ asset('assets/img/News_3.png') }}" class="card-img-top" alt="..."><br>
                <h5 class="card-title fw-bold">Vocanews</h5>
                <p class="card-text">Universitas Brawijaya Memperkenalkan 
                  Program 3 in 1 Administrasi Bisnis: “Statistika Bisnis untuk Sukses Bisnis”.</p>
                <p class="card-text"><small class="text-muted">27 Oktober 2023</small></p>
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
                            <img src="{{ asset('assets/img/arrow-right.svg') }} height="15px" alt="">
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