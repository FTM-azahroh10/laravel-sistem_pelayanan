<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Supporting Files
  </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</head>

<body>
  <style>
    body {
      background-image: url(img/background-about.png);
    }

    .whatsapp-float {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 1000;
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
  </section>
  <div style="background-color: rgb(187, 187, 187); height: 80px; padding-top: 20px; padding-left: 20px;">
    <h2 style="font-weight: bold;">SUPPORTING DOCUMENT</h2>
  </div><br><br><br>
  <div style="display: flex; justify-content: center; gap: 200px;">
    <div>
      <div
        style="display: flex; border-radius: 15px; padding: 30px; background-color: white; width: 500px; box-shadow: 0 6px 10px 0 rgba(0,0,0,0.5);">
        <img src="{{ asset('assets/img/sad.png') }}" alt="">
        <h4 style="font-weight: bolder; padding-top: 10px; padding-left: 8px;">Student Academic Document</h4>
      </div><br><br>
      <div
        style="display: flex; border-radius: 15px; padding: 30px; background-color: white; width: 500px; box-shadow: 0 6px 10px 0 rgba(0,0,0,0.5);">
        <img src="{{ asset('assets/img/fpd.png') }}" alt="">
        <h4 style="font-weight: bolder; padding-top: 10px; padding-left: 8px;">Final Project Document</h4>
      </div><br><br>
      <div
        style="display: flex; border-radius: 15px; padding: 30px; background-color: white; width: 500px; box-shadow: 0 6px 10px 0 rgba(0,0,0,0.5);">
        <img src="{{ asset('assets/img/aed.png') }}" alt="">
        <h4 style="font-weight: bolder; padding-top: 10px; padding-left: 8px;">Academic Event Document</h4>
      </div>
    </div>
    <div>
      <div
        style="display: flex; border-radius: 15px; padding: 30px; background-color: white; width: 500px; box-shadow: 0 6px 10px 0 rgba(0,0,0,0.5);">
        <img src="{{ asset('assets/img/gd.png') }}" alt="">
        <h4 style="font-weight: bolder; padding-top: 10px; padding-left: 8px;">Graduation Document</h4>
      </div><br><br>
      <div
        style="display: flex; border-radius: 15px; padding: 30px; background-color: white; width: 500px; box-shadow: 0 6px 10px 0 rgba(0,0,0,0.5);">
        <img src="{{ asset('assets/img/id.png') }}" alt="">
        <h4 style="font-weight: bolder; padding-top: 10px; padding-left: 8px;">Internship Document</h4>
      </div>
    </div>
  </div>
  <div class="whatsapp-float">
    <a href="https://chat.whatsapp.com/IxDWVRG8CN94cDohueV8qp" target="_blank">
      <img src="{{ asset('assets/img/whatsapp.png') }}" alt="WhatsApp" style="width: 60px; height: 60px;">
    </a>
  </div>
</body>

</html>