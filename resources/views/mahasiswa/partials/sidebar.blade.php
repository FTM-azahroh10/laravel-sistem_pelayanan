<div class="col-sm-3 sticky-top" style="background-color: #1D2951;">
    <div class="d-flex flex-sm-column flex-row flex-nowrap align-items-center sticky-top" id="sidebar">
        <div class="logo justify-content-center" style="padding-top: 20px;">
            <div class="row img-fluid ">
                <div class="col-md-6">
                    <img src="{{ asset('assets/img_mhs/logoub2.png') }}" alt="">
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('assets/img_mhs/logovokasi2.png') }}" alt="">
                </div>
            </div>
        </div>
        <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap justify-content-between w-100 px-3"
            style="padding-top: 40px;">
            <li>
                <div class="garis" style="height: 1px;width: 300px;background-color: #EDAB2D;"></div>
                <a href="/dashboard" class="nav-link py-3 px-2" style="color: white;" title=""
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                    <img style="padding-right: 20px;" src="{{ asset('assets/img_mhs/dashboard.svg') }}"
                        alt="">Dashboard
                </a>
                <div class="garis" style="height: 1px;width: 300px;background-color: #EDAB2D;"></div>
                <p>SERVICES</p>
            </li>
            <li>
                <a href="/academicService" class="nav-link py-3 px-2" style="color: white;" title=""
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                    <img style="padding-right: 20px;" src="{{ asset('assets/img_mhs/menu1.svg') }}"
                        alt="">Academic Service
                </a>
            </li>
            <li>
                <a href="/studentServices" class="nav-link py-3 px-2" style="color: white;" title=""
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                    <img style="padding-right: 20px;" src="{{ asset('assets/img_mhs/menu2.svg') }}"
                        alt="">Student Service
                </a>
            </li>
            <li>
                <a href="/financialService" class="nav-link py-3 px-2" style="color: white;" title=""
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                    <img style="padding-right: 20px;" src="{{ asset('assets/img_mhs/menu3.svg') }}"
                        alt="">Financial Service
                </a>
            </li>
            <li>
                <a href="/generalService" class="nav-link py-3 px-2" style="color: white;" title=""
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                    <img style="padding-right: 20px;" src="{{ asset('assets/img_mhs/menu4.svg') }}"
                        alt="">General Service
                </a>
            </li>
            <li>
                <a href="/faq-mahasiswa" class="nav-link py-3 px-2 mb-2" style="color: white;" title=""
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                    <img style="padding-right: 20px;" src="{{ asset('assets/img_mhs/menu5.svg') }}" alt="">FAQ
                </a>
                <div class="garis" style="height: 1px;width: 300px;background-color: #EDAB2D;"></div>
            </li>
            <li style="text-align: center;">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link py-3 px-2" style="color: white;">
                        <img style="padding-right: 20px;" src="{{ asset('assets/img/logout.png') }}"
                            alt="">Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
