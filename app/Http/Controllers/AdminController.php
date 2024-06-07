<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboardAdmin()
    {
        return view('admin.components.dashboard');
    }

    function faq()
    {
        return view('admin.components.faq');
    }

    function financialService()
    {
        return view('admin.components.financialService');
    }

    function academicService()
    {
        return view('admin.components.academicService.academicServices');
    }

    function appointmentAdmin()
    {
        return view('admin.components.appointmentAdmin');
    }

    function generalService()
    {
        return view('admin.components.generalService');
    }

    function serviceAdmin()
    {
        return view('admin.components.serviceAdmin');
    }

    function sop()
    {
        return view('admin.components.sop');
    }

    function staffAdmin()
    {
        return view('admin.components.staffAdmin');
    }

    function studentAdmin()
    {
        return view('admin.components.studentAdmin');
    }

    function studentService()
    {
        return view('admin.components.studentService');
    }

}
