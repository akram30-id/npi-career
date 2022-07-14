<!-- <div class="content"> -->
<div class="section-one pt-5">
    <div class="container-lg">
        <div class="row justify-content-center my-3">
            <div class="col-sm-4">
                <?= $this->session->flashdata('pesan'); ?>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="card shadow-lg border-0 rounded-4" style="width: 72rem;">
                <div class="card-body m-3">
                    <div class="container-fluid">
                        <form action="">
                            <div class="row justify-content-center mx-5 mt-3">
                                <div class="col-md-3 col-sm-2 mb-1">
                                    <select class="form-select rounded-5" aria-label="Default select example">
                                        <option>Level</option>
                                        <option value="1">Entry Level</option>
                                        <option value="2">Experienced</option>
                                        <option value="3">Manager</option>
                                        <option value="4">Magang</option>
                                        <option value="5">PKL</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-8 mb-1">
                                    <input class="form-control rounded-5" type="search" placeholder="Search" aria-label="Search">
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <button class="btn text-light fw-bold rounded-5 btn-mockup">Filter</button>
                                </div>
                            </div>
                        </form>
                        <div class="container-lg">
                            <div class="d-flex justify-content-start mt-4" style="margin-left: 80px;">
                                <a class="btn btn-sm btn-primary fw-semibold text-white rounded-4" style="margin-right: 8px;">IT</a>
                                <a class="btn btn-sm btn-primary fw-semibold text-white rounded-4" style="margin-right: 8px;">HRD</a>
                                <a class="btn btn-sm btn-primary fw-semibold text-white rounded-4" style="margin-right: 8px;">Legal</a>
                                <a class="btn btn-sm btn-primary fw-semibold text-white rounded-4" style="margin-right: 8px;">Accounting</a>
                                <a class="btn btn-sm btn-primary fw-semibold text-white rounded-4" style="margin-right: 8px;">Produksi</a>
                            </div>
                            <div class="d-flex justify-content-start mt-2 mb-3" style="margin-left: 80px;">
                                <a class="btn btn-sm btn-primary fw-semibold text-white rounded-4" style="margin-right: 8px;">Sales</a>
                                <a class="btn btn-sm btn-primary fw-semibold text-white rounded-4" style="margin-right: 8px;">Purchasing</a>
                                <a class="btn btn-sm btn-primary fw-semibold text-white rounded-4" style="margin-right: 8px;">Quality Control</a>
                                <a class="btn btn-sm btn-primary fw-semibold text-white rounded-4" style="margin-right: 8px;">Maintenance</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- IT SECTION -->
    <div class="container-lg">
        <div class="d-flex align-items-end">
            <img src="<?= base_url() . 'assets/img/it.svg'; ?>">
            <h1 class="text-primary fw-bold" style="margin-bottom: 32px;">IT</h1>
        </div>

        <div class="card mb-3 rounded-5 border-0 shadow" style="width: 48rem; height: 2rem;">
            <div class="card-body">
            </div>
        </div>
        <div class="card mb-3 rounded-5 border-0" style="width: 32rem; height: 2rem; background-color: #3C6CAE; margin-top: -48px;">
            <div class="card-body">
            </div>
        </div>

        <div class="d-flex justify-content-center mt-5">
            <div class="card border-0 shadow-lg p-4" style="width: 64rem; border-radius: 25px;">
                <div class="card-body">
                    <div class="row mt-3 justify-content-center align-items-center">
                        <div class="col-sm-8">
                            <div class="d-flex justify-content-start" style="margin-left: 38px;">
                                <h3 class="fw-bold">IT Staff - Network Administrator</h3>
                            </div>
                            <div class="d-flex justify-content-start my-3">
                                <h5 class="fw-semibold text-success" style="margin-left: 37px;">Rp. 10.000.000 - Rp. 15.000.000</h5>
                            </div>
                            <div class="d-flex justify-content-evenly align-items-center" style="margin-left: -32px;">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-briefcase"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="fw-semibold">IT</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-signal"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="fw-semibold">Experienced</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="fw-semibold"><i>Diupload 17 jam yang lalu</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-grid gap-2">
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Lamar</a>
                                <a href="<?= base_url() . 'Careers/detail'; ?>" class="btn btn-secondary fw-bold rounded-5" type="button">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <hr>
                    </div>

                    <div class="row mt-3 justify-content-center align-items-center">
                        <div class="col-sm-8">
                            <div class="d-flex justify-content-start" style="margin-left: 38px;">
                                <h3 class="fw-bold">IT Staff - Programmer (Internship)</h3>
                            </div>
                            <div class="d-flex justify-content-start my-3">
                                <h5 class="fw-semibold text-success" style="margin-left: 37px;">Rp. 1.000.000 - Rp. 2.000.000</h5>
                            </div>
                            <div class="d-flex justify-content-evenly align-items-center" style="margin-left: -32px;">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-briefcase"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="fw-semibold">IT</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-signal"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="fw-semibold">Magang</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="fw-semibold"><i>Diupload 17 jam yang lalu</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-grid gap-2">
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Lamar</a>
                                <a href="<?= base_url() . 'Careers/detail'; ?>" class="btn btn-secondary fw-bold rounded-5" type="button">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <hr>
                    </div>

                    <div class="row mt-3 justify-content-center align-items-center">
                        <div class="col-sm-8">
                            <div class="d-flex justify-content-start" style="margin-left: 38px;">
                                <h3 class="fw-bold">IT Staff - Hardware Specialist</h3>
                            </div>
                            <div class="d-flex justify-content-start my-3">
                                <h5 class="fw-semibold text-success" style="margin-left: 37px;">Rp. 10.000.000 - Rp. 15.000.000</h5>
                            </div>
                            <div class="d-flex justify-content-evenly align-items-center" style="margin-left: -32px;">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-briefcase"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="fw-semibold">IT</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-signal"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="fw-semibold">Experienced</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="fw-semibold"><i>Diupload 17 jam yang lalu</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-grid gap-2">
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Lamar</a>
                                <a href="<?= base_url() . 'Careers/detail'; ?>" class="btn btn-secondary fw-bold rounded-5" type="button">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <hr>
                    </div>

                    <div class="d-flex justify-content-center" style="margin-bottom: -56px;">
                        <div class="col-sm-3">
                            <a href="<?= base_url() . 'Careers/listLowonganDepartemen'; ?>" class="btn btn-block btn-lg btn-light fw-bold text-primary rounded-5 shadow">Show More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-five" style="padding-bottom: 128px;">
    <!-- HRD SECTION -->
    <div class="container-lg">
        <div class="d-flex align-items-end" style="margin-top: 128px;">
            <img src="<?= base_url() . 'assets/img/hrd.svg'; ?>">
            <h1 class="text-primary fw-bold" style="margin-bottom: 32px;">HRD</h1>
        </div>

        <div class="card mb-3 rounded-5 border-0 shadow" style="width: 48rem; height: 2rem;">
            <div class="card-body">
            </div>
        </div>
        <div class="card mb-3 rounded-5 border-0" style="width: 32rem; height: 2rem; background-color: #3C6CAE; margin-top: -48px;">
            <div class="card-body">
            </div>
        </div>

        <div class="d-flex justify-content-center mt-5">
            <div class="card border-0 shadow-lg p-4" style="width: 64rem;">
                <div class="card-body">
                    <div class="row mt-3 justify-content-center align-items-center">
                        <div class="col-sm-8">
                            <div class="d-flex justify-content-start" style="margin-left: 38px;">
                                <h3 class="fw-bold">People - Factory 1, Technical Trainer</h3>
                            </div>
                            <div class="d-flex justify-content-start my-3">
                                <h5 class="fw-semibold text-success" style="margin-left: 37px;">Rp. 8.000.000 - Rp. 10.000.000</h5>
                            </div>
                            <div class="d-flex justify-content-evenly align-items-center" style="margin-left: -32px;">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-briefcase"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="fw-semibold">HRD</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-signal"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="fw-semibold">Experienced</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="fw-semibold"><i>Diupload 17 jam yang lalu</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-grid gap-2">
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Lamar</a>
                                <a href="<?= base_url() . 'Careers/detail'; ?>" class="btn btn-secondary fw-bold rounded-5" type="button">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <hr>
                    </div>

                    <div class="row mt-3 justify-content-center align-items-center">
                        <div class="col-sm-8">
                            <div class="d-flex justify-content-start" style="margin-left: 38px;">
                                <h3 class="fw-bold">People - Factory 1, Technical Trainer</h3>
                            </div>
                            <div class="d-flex justify-content-start my-3">
                                <h5 class="fw-semibold text-success" style="margin-left: 37px;">Rp. 8.000.000 - Rp. 10.000.000</h5>
                            </div>
                            <div class="d-flex justify-content-evenly align-items-center" style="margin-left: -32px;">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-briefcase"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="fw-semibold">HRD</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-signal"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="fw-semibold">Experienced</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="fw-semibold"><i>Diupload 17 jam yang lalu</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-grid gap-2">
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Lamar</a>
                                <a href="<?= base_url() . 'Careers/detail'; ?>" class="btn btn-secondary fw-bold rounded-5" type="button">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <hr>
                    </div>

                    <div class="row mt-3 justify-content-center align-items-center">
                        <div class="col-sm-8">
                            <div class="d-flex justify-content-start" style="margin-left: 38px;">
                                <h3 class="fw-bold">People - Factory 1, Technical Trainer</h3>
                            </div>
                            <div class="d-flex justify-content-start my-3">
                                <h5 class="fw-semibold text-success" style="margin-left: 37px;">Rp. 8.000.000 - Rp. 10.000.000</h5>
                            </div>
                            <div class="d-flex justify-content-evenly align-items-center" style="margin-left: -32px;">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-briefcase"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="fw-semibold">HRD</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-signal"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="fw-semibold">Experienced</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="fw-semibold"><i>Diupload 17 jam yang lalu</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-grid gap-2">
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Lamar</a>
                                <a href="<?= base_url() . 'Careers/detail'; ?>" class="btn btn-secondary fw-bold rounded-5" type="button">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <hr>
                    </div>
                    <div class="d-flex justify-content-center" style="margin-bottom: -56px;">
                        <div class="col-sm-3">
                            <a href="" class="btn btn-block btn-lg btn-light fw-bold text-primary rounded-5 shadow">Show More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PRODUKSI SECTION -->
    <div class="container-lg">
        <div class="d-flex align-items-end" style="margin-top: 128px;">
            <img src="<?= base_url() . 'assets/img/produksi.svg'; ?>">
            <h1 class="text-primary fw-bold" style="margin-bottom: 32px;">Produksi</h1>
        </div>

        <div class="card mb-3 rounded-5 border-0 shadow" style="width: 48rem; height: 2rem;">
            <div class="card-body">
            </div>
        </div>
        <div class="card mb-3 rounded-5 border-0" style="width: 32rem; height: 2rem; background-color: #3C6CAE; margin-top: -48px;">
            <div class="card-body">
            </div>
        </div>

        <div class="d-flex justify-content-center mt-5">
            <div class="card border-0 shadow-lg p-4" style="width: 64rem;">
                <div class="card-body">
                    <div class="row mt-3 justify-content-center align-items-center">
                        <div class="col-sm-8">
                            <div class="d-flex justify-content-start" style="margin-left: 38px;">
                                <h3 class="fw-bold">Produksi - Staff Gudang</h3>
                            </div>
                            <div class="d-flex justify-content-start my-2">
                                <h5 class="fw-semibold text-success" style="margin-left: 37px;">Rp. 8.000.000 - Rp. 10.000.000</h5>
                            </div>
                            <div class="d-flex justify-content-evenly align-items-center" style="margin-left: -32px;">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-briefcase"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="fw-semibold">Produksi</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-signal"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="fw-semibold">Entry Level</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="fw-semibold"><i>Diupload 17 jam yang lalu</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-grid gap-2">
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Lamar</a>
                                <a href="<?= base_url() . 'Careers/detail'; ?>" class="btn btn-secondary fw-bold rounded-5" type="button">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <hr>
                    </div>

                    <div class="row mt-3 justify-content-center align-items-center">
                        <div class="col-sm-8">
                            <div class="d-flex justify-content-start" style="margin-left: 38px;">
                                <h3 class="fw-bold">Produksi - Staff Internship</h3>
                            </div>
                            <div class="d-flex justify-content-start my-2">
                                <h5 class="fw-semibold text-success" style="margin-left: 37px;">Rp. 3.000.000 - Rp. 3.500.000</h5>
                            </div>
                            <div class="d-flex justify-content-evenly align-items-center" style="margin-left: -32px;">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-briefcase"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="fw-semibold">Produksi</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-signal"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="fw-semibold">Magang</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="fw-semibold"><i>Diupload 17 jam yang lalu</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-grid gap-2">
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Lamar</a>
                                <a href="<?= base_url() . 'Careers/detail'; ?>" class="btn btn-secondary fw-bold rounded-5" type="button">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <hr>
                    </div>

                    <div class="row mt-3 justify-content-center align-items-center">
                        <div class="col-sm-8">
                            <div class="d-flex justify-content-start" style="margin-left: 38px;">
                                <h3 class="fw-bold">Produksi - Head Shift</h3>
                            </div>
                            <div class="d-flex justify-content-start my-2">
                                <h5 class="fw-semibold text-success" style="margin-left: 37px;">Rp. 8.000.000 - Rp. 10.000.000</h5>
                            </div>
                            <div class="d-flex justify-content-evenly align-items-center" style="margin-left: -32px;">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-briefcase"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="fw-semibold">Produksi</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="fa-solid fa-signal"></i>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="fw-semibold">Experienced</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="fw-semibold"><i>Diupload 17 jam yang lalu</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-grid gap-2">
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Lamar</a>
                                <a href="<?= base_url() . 'Careers/detail'; ?>" class="btn btn-secondary fw-bold rounded-5" type="button">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <hr>
                    </div>
                    <div class="d-flex justify-content-center" style="margin-bottom: -56px;">
                        <div class="col-sm-3">
                            <a href="" class="btn btn-block btn-lg btn-light fw-bold text-primary rounded-5 shadow">Show More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- </div> -->