<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    <title>Ijazah</title>
</head>
<body>
    <div style="border-width: 5px; border-color:black; border-style: solid;">
        <section id="header" style="text-align: center;">
            <img style="padding-top: 15px; width: 50px;" src="{{ public_path('assets/img/garuda.jpeg') }}" alt="" />
            <table style="margin: auto; width:100%; margin-top: 5px;">
                <tbody>
                    <tr>
                        <td align="center" valign="top">
                            <img style="padding: 15px; width: 100px;" src="{{ public_path('assets/img/logo-login.png') }}" alt="" />
                        </td>
                        <td style="text-align: center;" valign="top">
                            <h3 class="kementrian-header">KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN <br>REPUBLIK INDONESIA</h3>
                        </td>
                        <td align="center" valign="top">
                            <img style="padding: 15px; width: 100px;" src="{{ public_path('assets/img/logoubnew.jpg') }}" alt="" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section id="main" style="">
            <p style="text-align: center; font-size: 40px; margin-top: 0px; margin-bottom: 0px;"><b>UNIVERSITAS BRAWIJAYA</b></p>
            <p style="text-align: center; font-size: 20px;">Menyatakan Bahwa</p>
            <p style="text-align: center; font-size: 20px; margin-top: 0px; margin-bottom: 0px;"><b>{{ $data->nama }}</b></p>
            <p style="text-align: center; font-size: 20px; margin-top: 0px; margin-bottom: 0px;">Nomor Induk Mahasiswa : {{ $data->nim }}</p>
            <p style="text-align: center; font-size: 20px; margin-top: 0px; margin-bottom: 0px;">Telah menyelesaikan dan memenugi segala persyaratan pendidikan Program Studi Diploma pada</p>
            <p style="text-align: center; font-size: 20px; margin-top: 0px; margin-bottom: 0px;">Jurusan : {{ $data->jurusan }}</p>
            <p style="text-align: center; font-size: 20px; margin-top: 0px; margin-bottom: 0px;">Sehingga kepadanya diberikan ijazah serta gelar</p>
            <p style="text-align: center; font-size: 30px;"><b>Ahli Madya</b></p>
        </section>
        <section id="ttd">
            <table style="margin: auto; width:100%; margin-top: 5px;">
                <tbody>
                    <tr>
                        <td align="center" valign="top">
                            Rektor Universitas Brawijaya,
                            <br>
                            <br>
                            <br>
                            (Nama Rektor)
                        </td>
                        <td style="text-align: center;" valign="top">
                        </td>
                        <td align="center" valign="top">
                            Dekan Fakultas Vokasi,
                            <br>
                            <br>
                            <br>
                            (Nama Dekan)
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
