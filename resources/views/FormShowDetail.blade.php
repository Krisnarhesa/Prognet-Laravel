<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/app.css">

    <title>Tugas Laravel | Krisnarhesa</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <img src="/img/prognet.png" alt="" width="30" height="24" class="d-inline-block align-text-top"> Pemrograman Internet
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link nvbar" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nvbar active" href="#form">Detail Student Response Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Form -->
    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="text-center">
                        <div class="col">
                            <h1 class="h2">Student Details Response Data Form</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-50">
                        <div class="container mt-5">
    <table class="table table-borderless table-white">
        <tbody>
            @if ($data)
                <tr>
                    <td><strong>Full Name</strong></td>
                    <td>: {{ $data->Fullname }}</td>
                </tr>
                <tr>
                    <td><strong>Nick Name</strong></td>
                    <td>: {{ $data->NickName }}</td>
                </tr>
                <tr>
                    <td><strong>NIM</strong></td>
                    <td>: {{ $data->Nim }}</td>
                </tr>
                <tr>
                    <td><strong>Faculty</strong></td>
                    <td>: {{ $data->Faculty }}</td>
                </tr>
                <tr>
                    <td><strong>Gmail</strong></td>
                    <td>: {{ $data->Email }}</td>
                </tr>
                <tr>
                    <td><strong>Password</strong></td>
                    <td>: {{ $data->Password }}</td>
                </tr>
                <tr>
                    <td><strong>Date Of Birth</strong></td>
                    <td>: {{ $data->Date_of_birth }}</td>
                </tr>
                <tr>
                    <td><strong>Address</strong></td>
                    <td>: {{ $data->Address }}</td>
                </tr>
                <tr>
                    <td><strong>Gender</strong></td>
                    <td>: {{ $data->Gender }}</td>
                </tr>
                <tr>
                    <td><strong>Experience</strong></td>
                    <td>: {{ $data->Experience }}</td>
                </tr>
                <tr>
                    <td><strong>Describe Yourself</strong></td>
                    <td>: {{ $data->Describe_yourself }}</td>
                </tr>
                <tr>
                <td><strong>Favorite Color</strong></td>
                <td>:
                    {{ $data->Favorite_color }}
                    <div style="display: inline-block; background-color: {{ $data->Favorite_color }}; width: 30px; height: 30px; margin-left: 10px;"></div>
                </td>
                </tr>
                <tr>
                    <td><strong>Skills Range</strong></td>
                    <td>: {{ $data->Skills_range }}</td>
                </tr>
                <tr>
                    <td><strong>Profile Picture</strong></td>
                    <td>: <img src="{{ $data->Profile_picture }}" alt="Profile Picture" style="max-width: 100px; max-height: 100px;">
                </tr>
                <tr>
                    <td><strong>Terms</strong></td>
                    <td>: {{ $data->Terms }}</td>
                </tr>
            @else
                <tr>
                    <td colspan="2">Data not found.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
<div class="col-12 mb-3">
    <button class="w-100 btn btn-primary" onclick="location.href='/StudentListData'">Back To List Data Form</button>
</div>

                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#22303c" fill-opacity="1" d="M0,288L0,96L110.8,96L110.8,256L221.5,256L221.5,192L332.3,192L332.3,160L443.1,160L443.1,224L553.8,224L553.8,288L664.6,288L664.6,64L775.4,64L775.4,128L886.2,128L886.2,96L996.9,96L996.9,288L1107.7,288L1107.7,192L1218.5,192L1218.5,256L1329.2,256L1329.2,96L1440,96L1440,320L1329.2,320L1329.2,320L1218.5,320L1218.5,320L1107.7,320L1107.7,320L996.9,320L996.9,320L886.2,320L886.2,320L775.4,320L775.4,320L664.6,320L664.6,320L553.8,320L553.8,320L443.1,320L443.1,320L332.3,320L332.3,320L221.5,320L221.5,320L110.8,320L110.8,320L0,320L0,320Z"></path></svg>
    </section>
    <!-- footer -->
    <footer class="p-3 text-center fs-5">
        <p>©2023 | krisnarhesa</p>
    </footer>
    <!-- akhir footer -->
</body>
</html>
