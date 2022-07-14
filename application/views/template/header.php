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
                        <a class="nav-link" href="<?= base_url() . 'Careers/vacancies'; ?>">Vacancy</a>
                        <a class="nav-link" href="#">Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>