<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuperAdminController extends Controller
{
    public function dashboardSuperadmin()
    {
        return view('superadmin.components.dashboard');
    }
    public function staffs()
    {
        return view('superadmin.components.staffs');
    }
    public function report()
    {
        $year = 2023;
        $academic = DB::table('academic_services')->whereYear('created_at', $year)->count();

        $financial = DB::table('financial_services')->whereYear('created_at', $year)->count();

        $general = DB::table('general_service')->whereYear('created_at', $year)->count();

        $student = DB::table('student_service')->whereYear('created_at', $year)->count();

        $data = [
            'year' => $year,
            'academic' => $academic,
            'financial' => $financial,
            'general' => $general,
            'student' => $student
        ];

        // dd($data);
        return view('superadmin.components.report', ['data' => $data]);
    }

}
