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
                        <form method="POST">
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
                                <div class="col-md-4 col-sm-5 mb-1">
                                    <input class="form-control rounded-5" type="search" placeholder="Search" aria-label="Search">
                                </div>
                                <div class="col-md-1 col-sm-1">
                                    <button class="btn text-light fw-bold rounded-5 btn-mockup" type="submit">Filter</button>
                                </div>
                                <div class="col-sm-3">
                                    <a class="btn text-white fw-bold rounded-5 btn-warning" data-bs-toggle="modal" data-bs-target="#modalTambahLowongan">Tambah Lowongan</a>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="modalTambahLowongan" aria-labelledby="modalTambahLowonganLabel">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fw-bold" id="modalTambahLowonganLabel">Tambah Lowongan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="divisi">
                                                            <h5 class="fw-bold">Divisi <sup><a href="<?= base_url() . 'Admin/tambah_divisi'; ?>" class="fw-bold" style="text-decoration: none;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Klik untuk tambah divisi.">+</a></sup> </h5>
                                                        </label>
                                                        <select name="divisi" id="divisi" class="form-select">
                                                            <option value="">Pilih Divisi</option>
                                                            <option value="IT">IT</option>
                                                            <option value="legal">Legal</option>
                                                            <option value="hrd">HRD</option>
                                                            <option value="produksi">Produksi</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="level">
                                                            <h5 class="fw-bold">Level</h5>
                                                        </label>
                                                        <select name="level" id="level" class="form-select">
                                                            <option value="">Pilih Level</option>
                                                            <option value="experienced">Experienced</option>
                                                            <option value="manager">Manager</option>
                                                            <option value="entryLevel">Entry Level</option>
                                                            <option value="magang">Magang</option>
                                                            <option value="pkl">PKL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label for="posisi">
                                                        <h5 class="fw-bold">Posisi</h5>
                                                    </label>
                                                    <input type="text" class="form-control" name="posisi" placeholder="Contoh: Staff Akunting">
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label for="descLowongan">
                                                        <h5 class="fw-bold">Deskripsi Lowongan</h5>
                                                    </label>
                                                    <textarea name="descLowongan" id="descLowongan" rows="3" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <h5 class="fw-bold">Persyaratan</h5>
                                                    <div class="row mb-3 mt-3">
                                                        <div class="col-5">
                                                            <label for="gender">
                                                                <p class="fw-bold">Gender</p>
                                                            </label>
                                                            <select name="gender" id="gender" class="form-select rounded-3" style="margin-top: -16px;">
                                                                <option value="">-Pilih gender-</option>
                                                                <option value="L">Pria</option>
                                                                <option value="P">Wanita</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-5">
                                                            <label for="usia">
                                                                <p class="fw-bold">Usia</p>
                                                            </label>
                                                            <div class="input-group" style="margin-top: -16px;">
                                                                <input type="number" name="usia" class="form-control" style="border-radius: 10px 0px 0px 10px;">
                                                                <span class="input-group-text" id="basic-addon2" style="border-radius: 0px 10px 10px 0px;">Tahun</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-5">
                                                            <label for="pendidikan">
                                                                <p class="fw-bold">Pendidikan Terakhir</p>
                                                            </label>
                                                            <select name="gender" id="gender" class="form-select rounded-3" style="margin-top: -16px;">
                                                                <option value="">-Pilih Pendidikan-</option>
                                                                <option value="smp">SMP/Sederajat</option>
                                                                <option value="sma">SMA/Sederajat</option>
                                                                <option value="d3">D3</option>
                                                                <option value="s1">D4/S1</option>
                                                                <option value="s2">S2</option>
                                                                <option value="s3">S3</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-7">
                                                            <label for="jurusan">
                                                                <p class="fw-bold">Jurusan</p>
                                                            </label>
                                                            <input type="text" name="jurusan" id="jurusan" class="form-control rounded-3" style="margin-top: -16px;" placeholder="Contoh: Teknik Informatika">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-5">
                                                            <label for="pendidikan">
                                                                <p class="fw-bold">Dosis Vaksinasi</p>
                                                            </label>
                                                            <select name="vaksin" id="vaksin" class="form-select rounded-3" style="margin-top: -16px;">
                                                                <option value="">-Pilih Dosis-</option>
                                                                <option value="dosis1">Dosis 1</option>
                                                                <option value="dosis2">Dosis 2</option>
                                                                <option value="booster">Dosis Booster</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-5">
                                                            <label for="pengalaman">
                                                                <p class="fw-bold">Pengalaman Kerja</p>
                                                            </label>
                                                            <div class="input-group" style="margin-top: -16px;">
                                                                <input type="number" name="pengalaman" class="form-control" style="border-radius: 10px 0px 0px 10px;">
                                                                <span class="input-group-text" id="basic-addon2" style="border-radius: 0px 10px 10px 0px;">Tahun</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <label for="pengalaman">
                                                                <p class="fw-bold">Bidang Pengalaman</p>
                                                            </label>
                                                            <input type="text" name="bidang" id="bidang" class="form-control rounded-3" placeholder="Contoh: Staff Akunting" style="margin-top: -16px;">
                                                        </div>
                                                    </div>
                                                    <div class="form-floating">
                                                        <textarea name="persyaratan" id="persyaratan" class="form-control" style="height: 200px;"></textarea>
                                                        <label for="persyaratan">Tambahkan Persyaratan Lainnya Disini</label>
                                                    </div>
                                                    <small class="fw-bold" style="font-size: 8pt;">Pisahkan tiap poin dengan tanda ;</small>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label for="jobDetail">
                                                        <h5 class="fw-bold">Job Detail</h5>
                                                    </label>
                                                    <div class="form-floating">
                                                        <textarea name="jobdesc" id="jobdesc" class="form-control" style="height: 200px;"></textarea>
                                                        <label for="persyaratan">Tuliskan Job Description Disini</label>
                                                    </div>
                                                    <small class="fw-bold" style="font-size: 8pt;">Pisahkan tiap poin dengan tanda ;</small>
                                                </div>
                                                <div class="row mb-3 mt-3">
                                                    <h5 class="fw-bold">Range Salary</h5>
                                                    <div class="col-5">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon2" style="border-radius: 10px 0px 0px 10px;">Rp. </span>
                                                            <input type="text" name="minSalary" class="form-control number-separator" style="border-radius: 0px 10px 10px 0px;" placeholder="Min.">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon2" style="border-radius: 10px 0px 0px 10px;">Rp. </span>
                                                            <input type="text" name="maxSalary" class="form-control number-separator" style="border-radius: 0px 10px 10px 0px;" placeholder="Max.">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group mt-3">
                                                        <label for="jobDetail">
                                                            <h5 class="fw-bold">Expired Date</h5>
                                                        </label>
                                                        <div class="col-6">
                                                            <input type="date" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-grid gap2 mt-5 mt-3">
                                                    <button class="btn-mockup btn fw-bold rounded-5 text-white" type="submit">Tambah Data</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="container-lg">
                            <div class="d-flex justify-content-start mt-4" style="margin-left: 80px;">
                                <a href="#IT" class="btn btn-sm btn-primary fw-semibold text-white rounded-4" style="margin-right: 8px;">IT</a>
                                <a href="#HRD" class="btn btn-sm btn-primary fw-semibold text-white rounded-4" style="margin-right: 8px;">HRD</a>
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
    <div class="container-lg" id="IT">
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
                                <a href="<?= base_url() . 'Admin/pelamar'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Data Pelamar</a>
                                <div class="row justify-content-center">
                                    <div class="col-8 d-grid">
                                        <a class="btn btn-secondary fw-bold rounded-5" data-bs-toggle="modal" data-bs-target="#closeModal" type="button">Close</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="closeModal" tabindex="-1" aria-labelledby="closeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row justify-content-between">
                                                            <div class="col-10">
                                                                <h5 class="modal-title fw-bold" id="closeModalLabel">Yakin Ingin Menutup Lowongan <br>IT Staff - Network Administrator?</h5>
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
                                    </div>
                                    <div class="col-4 d-grid">
                                        <a class="btn btn-danger fw-bold rounded-5" data-bs-toggle="modal" data-bs-target="#deleteModal" type="button"><i class="fa-solid fa-trash"></i></a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row justify-content-between">
                                                            <div class="col-10">
                                                                <h5 class="modal-title fw-bold" id="deleteModalLabel">Yakin Ingin Menghapus Lowongan <br>IT Staff - Network Administrator Dari Database?</h5>
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
                                    </div>
                                </div>
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
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Data Pelamar</a>
                                <div class="row justify-content-center">
                                    <div class="col-8 d-grid">
                                        <a class="btn btn-secondary fw-bold rounded-5" type="button">Close</a>
                                    </div>
                                    <div class="col-4 d-grid">
                                        <a class="btn btn-danger fw-bold rounded-5" type="button"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </div>
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
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Data Pelamar</a>
                                <div class="row justify-content-center">
                                    <div class="col-8 d-grid">
                                        <a class="btn btn-secondary fw-bold rounded-5" type="button">Close</a>
                                    </div>
                                    <div class="col-4 d-grid">
                                        <a class="btn btn-danger fw-bold rounded-5" type="button"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <hr>
                    </div>
                    <div class="d-flex justify-content-center" style="margin-bottom: -56px;">
                        <div class="col-sm-3">
                            <a href="<?= base_url() . 'Admin/listLowonganDepartemen'; ?>" class="btn btn-block btn-lg btn-light fw-bold text-primary rounded-5 shadow">Show More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-five" style="padding-bottom: 128px;">
    <!-- HRD SECTION -->
    <div class="container-lg" id="HRD">
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
            <div class="card border-0 shadow-lg p-4 rounded-5" style="width: 64rem;">
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
                                <button class="btn btn-mockup fw-bold text-white rounded-5" type="button">Data Pelamar</button>
                                <div class="row justify-content-center">
                                    <div class="col-8 d-grid">
                                        <a class="btn btn-secondary fw-bold rounded-5" type="button">Close</a>
                                    </div>
                                    <div class="col-4 d-grid">
                                        <a class="btn btn-danger fw-bold rounded-5" type="button"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <hr>
                    </div>

                    <div class="row mt-3 justify-content-cente align-items-centerr">
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
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Data Pelamar</a>
                                <div class="row justify-content-center">
                                    <div class="col-8 d-grid">
                                        <a class="btn btn-secondary fw-bold rounded-5" type="button">Close</a>
                                    </div>
                                    <div class="col-4 d-grid">
                                        <a class="btn btn-danger fw-bold rounded-5" type="button"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </div>
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
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Data Pelamar</a>
                                <div class="row justify-content-center">
                                    <div class="col-8 d-grid">
                                        <a class="btn btn-secondary fw-bold rounded-5" type="button">Close</a>
                                    </div>
                                    <div class="col-4 d-grid">
                                        <a class="btn btn-danger fw-bold rounded-5" type="button"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </div>
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
            <div class="card border-0 shadow-lg p-4 rounded-5" style="width: 64rem;">
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
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Data Pelamar</a>
                                <div class="row justify-content-center">
                                    <div class="col-8 d-grid">
                                        <a class="btn btn-secondary fw-bold rounded-5" type="button">Close</a>
                                    </div>
                                    <div class="col-4 d-grid">
                                        <a class="btn btn-danger fw-bold rounded-5" type="button"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </div>
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
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Data Pelamar</a>
                                <div class="row justify-content-center">
                                    <div class="col-8 d-grid">
                                        <a class="btn btn-secondary fw-bold rounded-5" type="button">Close</a>
                                    </div>
                                    <div class="col-4 d-grid">
                                        <a class="btn btn-danger fw-bold rounded-5" type="button"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </div>
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
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Data Pelamar</a>
                                <div class="row justify-content-center">
                                    <div class="col-8 d-grid">
                                        <a class="btn btn-secondary fw-bold rounded-5" type="button">Close</a>
                                    </div>
                                    <div class="col-4 d-grid">
                                        <a class="btn btn-danger fw-bold rounded-5" type="button"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </div>
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