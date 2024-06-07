<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Status Room
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
  <div class="about"
    style="width: 100%; height: 750px; display: flex; flex-direction: row; justify-content: center; align-items: center; gap: 100px;">
    <div
      style=" box-shadow: 0 0 0 2px #fff inset; background-color: rgba(138, 143, 150, 0.7); border-radius: 20px; gap: 100px; padding: 90px; text-align: center;">
      <h2 style="font-weight: bolder;">Academic Sevices - room 405</h2><br>
      <div style="display: flex;">
        <img src="{{ asset('assets/img/ringtone.png') }}" alt="" style="width: 100px;">
        <h2 style="margin-left: 20px;">1 person left before you <br>it’s almost your turn </h2>
      </div><br>
      <a href="/homepage-status-2">
        <div
          style="position: relative; margin-left: 120px; width: 220px; height: 140px; border-radius: 20px; overflow: hidden;">
          <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #1D2951; border-radius: 20px;">
            <h1 style="color: white; padding-top:50px; font-weight: bold;">45</h1>
          </div>
          <div
            style="position: absolute; top: -10px; left: -10px; width: calc(100% + 20px); height: calc(20% + 10px); background-color: #EDAB2D; z-index: 1;">
          </div>
        </div>
      </a>
    </div>
  </div>

  <div class="whatsapp-float">
    <a href="https://chat.whatsapp.com/IxDWVRG8CN94cDohueV8qp" target="_blank">
      <img src="{{ asset('assets/img/whatsapp.png') }}" alt="WhatsApp" style="width: 60px; height: 60px;">
    </a>
  </div>
</body>

</html>