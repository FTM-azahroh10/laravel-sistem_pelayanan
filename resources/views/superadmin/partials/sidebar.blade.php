<div class="col-sm-auto sticky-top" style="background-color: #1D2951;">
    <div class="d-flex flex-sm-column flex-row flex-nowrap align-items-center sticky-top" style="height: 100%;">
        <div class="logo justify-content-center" style="padding-top: 20px;">
            <div class="row img-fluid ">
                <div class="col-md-6">
                    <img src="{{ asset('assets/img_spradm/logo.png') }}" alt="">
                </div>
            </div>
        </div>
        <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap justify-content-between w-100 px-3"
            style="padding-top: 40px;">
            <li>
                <div class="garis" style="height: 1px;width: 300px;background-color: #EDAB2D;"></div>
                <a href="/dashboard-superadmin" class="nav-link py-3 px-2" style="color: white;" title=""
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                    <img style="padding-right: 20px;" src="{{ asset('assets/img_spradm/dashboard.svg') }}"
                        alt="">Dashboard
                </a>
            </li>
            <div class="garis" style="height: 1px;width: 300px;background-color: #EDAB2D;"></div>
            <p class="pt-3" style="color: #B3BDC8;">General Settings</p>
            <li>
                <a href="/staffs" class="nav-link py-3 px-2" style="color: white;" title=""
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                    <img style="padding-right: 20px;" src="{{ asset('assets/img_spradm/staffs.png') }}"
                        alt="">Staffs
                </a>
            </li>
            <div class="garis" style="height: 1px;width: 300px;background-color: #EDAB2D;"></div>
            <p class="pt-3" style="color: #B3BDC8;">Optional Modules</p>
            <li>
                <a href="/report" class="nav-link py-3 px-2" style="color: white;" title=""
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                    <img style="padding-right: 20px;" src="{{ asset('assets/img_spradm/report.png') }}"
                        alt="">Summary
                    Report
                </a>
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
