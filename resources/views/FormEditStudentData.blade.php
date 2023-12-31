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

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

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
            </a >
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link nvbar" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nvbar active" href="#form">Edit Form</a>
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
                            <h1 class="h2">Edit Student Biodata Form</h1><br>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-50">
                            <form method="post" enctype="multipart/form-data" action="/UpdateStudentData/{{ $data->id }}">
                                @csrf
                                @method('PUT')
                                <div class="col-12 mb-3">
                                    <div class="alert alert-info alert-dismissible fade show d-none my-alert" role="alert">
                                        <strong>Your Message Has Been Successfully Submitted!</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <div class="col-12 mb-3">
                                    <label for="inputFullName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="FullName" id="inputFullName" required pattern="[A-Za-z ]+" title="Full Name must consist of letters only!" value="{{ $data->Fullname }}"/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputNickName" class="form-label">Nick Name</label>
                                    <input type="text" class="form-control" name="NickName" id="inputNickName" required pattern="[A-Za-z ]+" title="Nick Name must consist of letters only!" value="{{ $data->NickName }}"/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputNim" class="form-label">NIM </label><br>
                                    <input type="text" id="inputNim" class="form-control" name="Nim" required maxlength="10" minlength="10" pattern="[0-9]{10}" value="{{ $data->Nim }}">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputFaculty" class="form-label">Faculty</label>
                                    <select id="inputFaculty" name="Faculty" class="form-select" required>
                                        <option selected>Choose Faculty</option>
                                        <option value="Faculty of Science" @if($data->Faculty == 'Faculty of Science') selected @endif>Faculty of Science</option>
                                        <option value="Faculty of Arts" @if($data->Faculty == 'Faculty of Arts') selected @endif>Faculty of Arts</option>
                                        <option value="Faculty of Engineering" @if($data->Faculty == 'Faculty of Engineering') selected @endif>Faculty of Engineering</option>
                                        <option value="Faculty of Business" @if($data->Faculty == 'Faculty of Business') selected @endif>Faculty of Business</option>
                                        <option value="Faculty of Medicine" @if($data->Faculty == 'Faculty of Medicine') selected @endif>Faculty of Medicine</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputEmail" class="form-label">Gmail</label>
                                    <input type="email" class="form-control" name="Email" id="inputEmail" placeholder="example@gmail.com" value="{{ $data->Email }}" required />
                                </div>

                                <div class="col-12 mb-3">
                                <label for="inputPassword" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="Password" id="inputPassword" value="{{ $data->Password }}" required minlength="8" />
                                    <button type="button" class="btn btn-secondary" id="togglePassword">
                                        <i class="fa fa-eye" id="eyeIcon"></i>
                                    </button>
                                </div>
                            </div>


                                <div class="col-12 mb-3">
                                    <label for="inputDateOfBirth" class="form-label">Date Of Birth</label>
                                    <input type="date" class="form-control" name="DateOfBirth" id="inputDateOfBirth"  value="{{ $data->Date_of_birth }}" required/>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="Address" id="inputAddress" value="{{ $data->Address }}" required/>
                                </div>

                                <div>
                                    <label for="inputGender" class="form-label">Gender</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Gender" id="inputMaleGender" value="Male" @if( $data -> Gender == 'Male') {{ "checked" }} @endif  required />
                                    <label class="form-check-label" for="inputMaleGender"> Male </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Gender" id="inputFemaleGender" value="Female" @if ( $data -> Gender == 'Female') {{ "checked" }} @endif required />
                                    <label class="form-check-label" for="inputFemaleGender"> Female </label>
                                </div>

                                <div>
                                    <label for="inputExperience" class="form-label">Experience</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="Experience" id="Volunteer" value="Volunteer" @if ( $data -> Experience == 'Volunteer') {{ "checked" }} @endif />
                                    <label class="form-check-label" for="Volunteer">Volunteer</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="Experience" id="Internship" value="Internship" @if ( $data -> Experience == 'Internship') {{ "checked" }} @endif />
                                    <label class="form-check-label" for="Internship">Internship</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="Experience" id="Workshop" value="Workshop" @if ( $data -> Experience == 'Workshop') {{ "checked" }} @endif />
                                    <label class="form-check-label" for="Workshop">Workshop</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="Experience" id="Training" value="Training" @if ( $data -> Experience == 'Training') {{ "checked" }} @endif/>
                                    <label class="form-check-label" for="Training">Training</label>
                                </div>
                                
                                <div class="col-12 mb-3">
                                    <label for="inputTextarea" class="form-label">Describe Yourself</label>
                                    <textarea class="form-control" name="Textarea" id="inputTextarea" placeholder="Describe here" required rows="4"> {{ $data->Describe_yourself }} </textarea>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputColor" class="form-label">Favorite Color</label>
                                    <input type="color" class="form-control" name="Color" id="inputColor" value="{{ $data->Favorite_color }}"/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="inputRange" class="form-label">skills Range</label>
                                    <input type="range" class="form-control" name="Range" id="inputRange" min="0" max="100" step="1" value="{{ $data->Skills_range }}"/>
                                </div>
                                <div class="col-12 mb-3">
                <label for="inputFile" class="form-label">Your Profile Picture</label><br>
                @if($data->Profile_picture)
                <div class = "row justify-content-center mb-5">
                <img src="{{ asset('storage/' . $data->Profile_picture) }}" alt="Profile Picture" class="mb-2" width="150">
                </div>
                @endif
                <label for="inputFile" class="form-label">Reupload Your Profile Picture</label>
                <input type="file" class="form-control" name="File" id="inputFile" accept="image/jpeg, image/png, image/jpg"/>
                </div>
                                <div class="form-check form-switch" class="col-12 mb-3">
                                    <label class="form-check-label" for="inputPersonalTerms">I Agree to the Terms and Conditions</label>
                                    <input class="form-check-input form-check-lg" type="checkbox" name="PersonalTerms" id="inputPersonalTerms" @if ( $data -> Terms == 'on') {{ "checked" }} @endif required >
                                </div>
                                <div class="col-12 mb-3">
                                    <button type="reset" class="w-100 btn btn-danger btn-reset">Reset</button>
                                </div>
                                <div>
                                    <button class="w-100 btn btn-success btn-kirim" type="submit">Resubmit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#22303c" fill-opacity="1" d="M0,288L0,96L110.8,96L110.8,256L221.5,256L221.5,192L332.3,192L332.3,160L443.1,160L443.1,224L553.8,224L553.8,288L664.6,288L664.6,64L775.4,64L775.4,128L886.2,128L886.2,96L996.9,96L996.9,288L1107.7,288L1107.7,192L1218.5,192L1218.5,256L1329.2,256L1329.2,96L1440,96L1440,320L1329.2,320L1329.2,320L1218.5,320L1218.5,320L1107.7,320L1107.7,320L996.9,320L996.9,320L886.2,320L886.2,320L775.4,320L775.4,320L664.6,320L664.6,320L553.8,320L553.8,320L443.1,320L443.1,320L332.3,320L332.3,320L221.5,320L221.5,320L110.8,320L110.8,320L0,320L0,320Z"></path></svg>
            </section>

            <script>
        document.addEventListener('DOMContentLoaded', function() {
            var inputPassword = document.getElementById('inputPassword');
            var eyeIcon = document.getElementById('eyeIcon');
            var togglePassword = document.getElementById('togglePassword');

            togglePassword.addEventListener('click', function() {
                if (inputPassword.type === 'password') {
                    inputPassword.type = 'text';
                    eyeIcon.className = 'fa fa-eye-slash'; // Ganti ikon mata ke ikon mata yang terlarang
                } else {
                    inputPassword.type = 'password';
                    eyeIcon.className = 'fa fa-eye'; // Ganti ikon mata ke ikon mata biasa
                }
            });
        });
    </script>
    <!-- footer -->
    <footer class="p-3 text-center fs-5">
        <p>©2023 | krisnarhesa</p>
    </footer>
    <!-- akhir footer -->
</body>
</html>