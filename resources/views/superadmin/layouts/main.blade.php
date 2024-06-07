<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard SuperAdmin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    {{-- icon --}}
    <script src="https://kit.fontawesome.com/809b4530df.js" crossorigin="anonymous"></script>

    {{-- dataTables --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
</head>

<body style="background-color: #D9D9D9;">
    @yield('style')
    <div class="container-fluid">
        <div class="row" style="height: 918px;">
            @include('superadmin.partials.sidebar')
            <div class="col-sm" style="background-color: #EDAB2D;height: 80px;">
                <div class="container">
                    @include('superadmin.partials.header')
                    <main>
                        @yield('content')
                        <script>
                            function searchStudents() {
                                var searchInput = document.getElementById("search-input").value;
                                // Logika untuk mencari mahasiswa berdasarkan nilai searchInput
                                console.log("Searching students for:", searchInput);
                            }

                            function addStudent() {
                                // Logika untuk menambahkan mahasiswa
                                console.log("Adding a new student...");
                            }

                            function editStudent() {
                                // Logika untuk mengedit mahasiswa
                                console.log("Editing a student...");
                            }

                            function deleteStudent() {
                                // Logika untuk menghapus mahasiswa
                                console.log("Deleting a student...");
                            }
                        </script>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    {{-- datatables --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#table');
    </script>
</body>

</html>