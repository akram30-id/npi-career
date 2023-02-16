<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nippisun Indonesia - Career</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() . 'assets/fontawesome/css/all.js'; ?>">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Nunito';
            src: url(<?= base_url() . 'assets/fonts/nunito'; ?>);
        }

        #dreamJob {
            background: url(assets/img/icon/magnifying-glass-solid.svg) no-repeat scroll 7px 7px;
            padding-left: 48px;
            filter: invert(15%) sepia(51%) saturate(3427%) hue-rotate(211deg) brightness(82%) contrast(102%);
        }

        .btn-cool-blues {
            background: #2193b0;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #6dd5ed, #2193b0);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #fff;
            border: 3px solid #eee;
        }

        .btn-pink-moon {
            background: #ec008c;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #fc6767, #ec008c);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #fc6767, #ec008c);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #fff;
            border: 3px solid #eee;
        }

        .btn-mockup {
            background-color: #062173;
        }

        .btn-mockup:hover {
            border-color: #062173;
            color: #062173 !important;
        }

        #search {
            box-shadow: 0 8px 16px 0 rgba(79, 173, 255, 0.5);
        }

        #allJobs {
            box-shadow: 0 8px 16px 0 rgba(188, 4, 201, 0.5);
        }

        #button-addon2 {
            position: absolute;
            right: 2px;
            top: 1px;
            bottom: 1px;
            z-index: 9;
            display: flex;
        }

        .section-one {
            background: linear-gradient(to bottom, #e6f6ff, #ffffff);
        }

        .section-two {
            margin-top: 128px;
            margin-bottom: 64px;
            background: #ffffff;
        }

        .section-four {
            margin-bottom: 128px;
        }

        .section-five {
            background: linear-gradient(to top, #e6f6ff, #ffffff);
        }

        .section-end {
            margin-top: 72px;
        }

        .btn-delete {
            background-color: #fff;
            border-color: red;
            color: red !important;
            border: 10;
        }

        .btn-delete:hover {
            background-color: red;
            color: #fff !important;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-lg">
            <a class="navbar-brand" href="#" style="color: #062173;"><img src="<?= base_url() . 'assets/img/logo.png'; ?>" style="width: 100px;"> <i><b>Nippisun Indonesia</i></b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex justify-content-end">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav fw-bold my-3">
                        <a class="nav-link" aria-current="page" href="<?= base_url(); ?>">About Us</a>
                        <a class="nav-link" href="#">Our Workplace</a>
                        <a class="nav-link" href="<?= base_url() . 'Admin'; ?>">Vacancy</a>
                        <a class="nav-link" href="#">Blog</a>
                        <a href="" class="nav-link btn btn-sm mx-3 rounded-3" data-bs-toggle="modal" data-bs-target="#changePasswordModal" style="background-color: #FFED50;">Change Password</a>
                        <a class="nav-link btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="fa-solid text-white fa-power-off"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row justify-content-between">
                        <div class="col-10">
                            <h5 class="modal-title" id="logoutModalLabel">Apakah Anda Yakin Ingin Logout?</h5>
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="row justify-content-end mt-5">
                        <div class="col-2">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-danger" href="<?= base_url() . 'Authentication/logout'; ?>">Ya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row justify-content-between mb-4">
                        <div class="col-10">
                            <h5 class="modal-title fw-bold" id="changePasswordModalLabel">Ganti Password Administrator</h5>
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <form action="" method="POST">
                        <div class="mb-4">
                            <label for="passwordBaru" class="form-label fw-bold">Password Baru</label>
                            <input type="password" class="form-control" name="passwordBaru" id="passwordBaru">
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label fw-bold">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
                        </div>
                        <div class="my-3">
                            <div class="d-grid gap-3">
                                <button class="btn btn-warning fw-semibold rounded-5" type="submit">Ganti Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>