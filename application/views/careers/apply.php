<div class="section-one pt-1">
    <div class="container mt-5">
        <div class="card border-0 rounded-4 fw-bold" style="background-color: #D9D9D9; max-width: 720px;">
            <div class="card-body">
                <nav aria-label="breadcrumb" style="margin-left: 32px; margin-bottom: -16px;">
                    <ol class="breadcrumb mt-1">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>" style="text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url() . 'vacancies'; ?>" style="text-decoration: none;">List Lowongan</a></li>
                        <li class="breadcrumb-item active vacancy" data-id="<?= $id_loker ?>" aria-current="page">Loading . . . . .</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-7">
                <div class="row">
                    <h1 class="fw-bold">Apply Ke Posisi</h1>
                    <h1 class="fw-bold vacancy"><i>Loading . . . .</i></h1>
                </div>
            </div>
            <div class="col-sm-5">
                <img src="<?= base_url() . 'assets/img/it.png'; ?>" style="width: 256px;">
            </div>
            <div class="col-sm-2" style="margin-top: -16px; margin-bottom: 32px;">
                <div class="d-grid gap-2">
                    <a class="btn btn-secondary rounded-3" id="detail">Detail Lowongan</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">

    <form id="form-add-applicant" class="needs-validation" novalidate>
        <div class="row justify-content-center">

            <!-- SKILL REQUIREMENT -->
            <div class="col-sm-6">
                <div class="card border-0 shadow-lg p-4" style="border-radius: 16px;">
                    <div class="card-body">
                        <h3 class="fw-bold text-black">Checklist Kualifikasi</h3>
                        <hr style="border-top: 3px solid #000; margin-top: -4px;">
                        <div class="row mt-4 mb-5">
                            <div class="col-sm-12">
                                <p class="form-label fw-bold">Centang sesuai dengan kualifikasi Anda</p>
                                <div class="form-check" id="requirement-check">
                                    <div class="row" id="kemampuan">
                                        <!-- SKILL REQUIREMENT CONTENT WILL BE HERE -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- REFERENSI -->
            <div class="col-sm-6">
                <div class="card border-0 shadow-lg p-4 mb-2" style="border-radius: 16px;">
                    <div class="card-body">
                        <h3 class="fw-bold text-black">Referensi</h3>
                        <hr style="border-top: 3px solid #000; margin-top: -4px;">
                        <div class="row mt-4">
                            <div class="col-sm-12">
                                <label for="referensi" class="form-label fw-bold">Darimana Anda Mendengar Tentang Kami?</label>
                                <input type="text" class="form-control" id="input-referensi" required>
                                <div class="invalid-feedback">
                                    Referensi Masih Kosong
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 shadow-lg p-4" style="border-radius: 16px;">
                    <div class="card-body">
                        <h3 class="fw-bold text-black">Make your pitch!</h3>
                        <hr style="border-top: 3px solid #000; margin-top: -4px;">
                        <div class="row mt-4">
                            <div class="col-sm-12">
                                <label for="referensi" class="form-label fw-bold">Beritahu kami bahwa Anda sangat layak di posisi ini</label>
                                <textarea class="form-control" id="input-pitch" rows="3" required></textarea>
                                <div class="invalid-feedback">
                                    Pitch Masih Kosong
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="row justify-content-center mt-5" style="margin-bottom: 256px !important;">
    <div class="col-sm-4">
        <div class="d-grid gap-2">
            <button class="btn btn-primary rounded-5 fw-bold" type="submit" id="btn-submit-applicant">Submit</button>
        </div>
    </div>
</div>
</form>
</div>

<input type="hidden" class="form-control" value="<?= $id_loker ?>" id="id-loker">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-10 text-center">
                        <i style="color: #0b8000; font-size: 5rem;" class="bi bi-check-circle-fill"></i>
                    </div>
                </div>
                <div class="row justify-content-center my-3">
                    <div class="col-lg-12 text-center">
                        <h3 class="fw-bold text-success">SUCCESS</h3>
                        <p id="vacancy-alert"></p>
                    </div>
                </div>
                <div class="row justify-content-center mt-3 mb-4">
                    <div class="col-6">
                        <div class="d-grid">
                            <a class="btn btn-success btn-lg" id="success-submit">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>