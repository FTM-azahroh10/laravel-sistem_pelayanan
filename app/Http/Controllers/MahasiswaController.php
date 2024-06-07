<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\AdminAppointment;
use App\Models\AcademicServices;
use App\Models\FileUpload;
use App\Models\AdminStudents;


class MahasiswaController extends Controller
{
    public function dashboard()
    {
        return view('mahasiswa.components.dashboard');
    }
    public function academicService()
    {
        return view('mahasiswa.components.academicService');
    }
    public function activities()
    {
        return view('mahasiswa.components.activities');
    }
    public function activitiesQueue()
    {
        return view('mahasiswa.components.activitiesQueue');
    }
    public function activitiesStatus()
    {
        return view('mahasiswa.components.activitiesStatus');
    }
    public function activitiesUpload()
    {
        return view('mahasiswa.components.activitiesUpload');
    }
    public function enrolling()
    {
        return view('mahasiswa.components.enrolling');
    }
    public function enrollingQueue()
    {
        return view('mahasiswa.components.enrollingQueue');
    }
    public function enrollingQueueStore(Request $request)
    {
        $request->validate([
            'appointment_date' => ['required'],
            'appointment_time' => ['required'],
        ]);

        $user = auth()->user();
        $code = 'ENR-' . Str::random(28);
        $data = [
            'nama' => $user->name,
            'email' => $user->email,
            'service' => 'Re-Enrolling',
            'start_appointment' => $request->appointment_time,
            'end_appointment' => $request->appointment_time,
            'code' => $code,
            'tanggal' => $request->appointment_date,
        ];

        DB::transaction(function () use ($data) {
            AdminAppointment::create($data);
        });

        return redirect()->to('/enrolling')->with('success', 'Appointment Berhasil dikirim! Kode anda adalah ' . $code . '. Harap disimpan dengan baik karena tidak akan muncul kembali.');
    }
    public function enrollingStatus()
    {
        return view('mahasiswa.components.enrollingStatus');
    }
    public function enrollingUpload()
    {
        return view('mahasiswa.components.enrollingUpload');
    }
    public function faq()
    {
        return view('mahasiswa.components.faq');
    }
    public function financialService()
    {
        return view('mahasiswa.components.financialService');
    }
    public function funds()
    {
        return view('mahasiswa.components.funds');
    }
    public function fundsQueue()
    {
        return view('mahasiswa.components.fundsQueue');
    }
    public function fundsStatus()
    {
        return view('mahasiswa.components.fundsStatus');
    }
    public function fundsUpload()
    {
        return view('mahasiswa.components.fundsUpload');
    }
    public function generalService()
    {
        return view('mahasiswa.components.generalService');
    }
    public function ijazah()
    {
        return view('mahasiswa.components.ijazah');
    }
    public function ijazahDownload()
    {
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
        $user = AdminStudents::where('email', auth()->user()->email)->get()->first();
        $mpdf->WriteHTML(view('pdf.ijazah_template', [
            'data' => $user
        ]));
        $mpdf->Output();
        // return view('pdf.ijazah_template');
    }
    public function leave()
    {
        return view('mahasiswa.components.leave');
    }
    public function leaveQueue()
    {
        return view('mahasiswa.components.leaveQueue');
    }
    public function leaveQueueStore(Request $request)
    {
        $request->validate([
            'appointment_date' => ['required'],
            'appointment_time' => ['required'],
        ]);

        $user = auth()->user();
        $code = 'LEV-' . Str::random(28);
        $data = [
            'nama' => $user->name,
            'email' => $user->email,
            'service' => 'Leave',
            'start_appointment' => $request->appointment_time,
            'end_appointment' => $request->appointment_time,
            'code' => $code,
            'tanggal' => $request->appointment_date,
        ];

        DB::transaction(function () use ($data) {
            AdminAppointment::create($data);
        });

        return redirect()->to('/leave')->with('success', 'Appointment Berhasil dikirim! Kode anda adalah ' . $code . '. Harap disimpan dengan baik karena tidak akan muncul kembali.');
    }
    public function leaveStatus()
    {
        return view('mahasiswa.components.leaveStatus');
    }
    public function leaveUpload()
    {
        return view('mahasiswa.components.leaveUpload');
    }
    public function registration()
    {
        return view('mahasiswa.components.registration');
    }
    public function registrationQueue()
    {
        return view('mahasiswa.components.registrationQueue');
    }
    public function registrationQueueStore(Request $request)
    {
        $request->validate([
            'appointment_date' => ['required'],
            'appointment_time' => ['required'],
        ]);

        $user = auth()->user();
        $code = 'REG-' . Str::random(28);
        $data = [
            'nama' => $user->name,
            'email' => $user->email,
            'service' => 'Registration of Judicium',
            'start_appointment' => $request->appointment_time,
            'end_appointment' => $request->appointment_time,
            'code' => $code,
            'tanggal' => $request->appointment_date,
        ];

        DB::transaction(function () use ($data) {
            AdminAppointment::create($data);
        });

        return redirect()->to('/registration')->with('success', 'Appointment Berhasil dikirim! Kode anda adalah ' . $code . '. Harap disimpan dengan baik karena tidak akan muncul kembali.');
    }
    public function registrationStatus()
    {
        return view('mahasiswa.components.registrationStatus');
    }
    public function registrationUpload()
    {
        return view('mahasiswa.components.registrationUpload');
    }
    public function scholarship()
    {
        return view('mahasiswa.components.scholarship');
    }
    public function scholarshipQueue()
    {
        return view('mahasiswa.components.scholarshipQueue');
    }
    public function scholarshipStatus()
    {
        return view('mahasiswa.components.scholarshipStatus');
    }
    public function scholarshipUpload()
    {
        return view('mahasiswa.components.scholarshipUpload');
    }
    public function sexualBullying()
    {
        return view('mahasiswa.components.sexualBullying');
    }
    public function studentServices()
    {
        return view('mahasiswa.components.studentServices');
    }
    public function submission()
    {
        return view('mahasiswa.components.submission');
    }
    public function submissionQueue()
    {
        return view('mahasiswa.components.submissionQueue');
    }
    public function submissionQueueStore(Request $request)
    {
        $request->validate([
            'appointment_date' => ['required'],
            'appointment_time' => ['required'],
        ]);

        $user = auth()->user();
        $code = 'RSG-' . Str::random(28);
        $data = [
            'nama' => $user->name,
            'email' => $user->email,
            'service' => 'Resignation',
            'start_appointment' => $request->appointment_time,
            'end_appointment' => $request->appointment_time,
            'code' => $code,
            'tanggal' => $request->appointment_date,
        ];

        DB::transaction(function () use ($data) {
            AdminAppointment::create($data);
        });

        return redirect()->to('/submission')->with('success', 'Appointment Berhasil dikirim! Kode anda adalah ' . $code . '. Harap disimpan dengan baik karena tidak akan muncul kembali.');
    }
    public function submissionStatus()
    {
        return view('mahasiswa.components.submissionStatus');
    }
    public function submissionUpload()
    {
        return view('mahasiswa.components.submissionUpload');
    }
    public function terminal()
    {
        return view('mahasiswa.components.terminal');
    }
    public function terminalQueue()
    {
        return view('mahasiswa.components.terminalQueue');
    }
    public function terminalQueueStore(Request $request)
    {
        $request->validate([
            'appointment_date' => ['required'],
            'appointment_time' => ['required'],
        ]);

        $user = auth()->user();
        $code = 'TER-' . Str::random(28);
        $data = [
            'nama' => $user->name,
            'email' => $user->email,
            'service' => 'Terminal',
            'start_appointment' => $request->appointment_time,
            'end_appointment' => $request->appointment_time,
            'code' => $code,
            'tanggal' => $request->appointment_date,
        ];

        DB::transaction(function () use ($data) {
            AdminAppointment::create($data);
        });

        return redirect()->to('/terminal')->with('success', 'Appointment Berhasil dikirim! Kode anda adalah ' . $code . '. Harap disimpan dengan baik karena tidak akan muncul kembali.');
    }
    public function terminalStatus()
    {
        return view('mahasiswa.components.terminalStatus');
    }
    public function terminalUpload()
    {
        return view('mahasiswa.components.terminalUpload');
    }
    public function ukt()
    {
        return view('mahasiswa.components.ukt');
    }
    public function uktQueue()
    {
        return view('mahasiswa.components.uktQueue');
    }
    public function uktStatus()
    {
        return view('mahasiswa.components.uktStatus');
    }
    public function uktUpload()
    {
        return view('mahasiswa.components.uktUpload');
    }
}
