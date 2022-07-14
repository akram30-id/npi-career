<div class="container my-5">

    <div class="row justify-content-start my-5">
        <div class="col-sm-1">
            <div class="d-grid">
                <a class="btn rounded-5 btn-secondary btn-sm" onclick="window.history.back()"><i class="fa-solid fa-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-6">
            <div class="card border-0 rounded-5 fw-bold" style="background-color: #D9D9D9; height: 3rem;">
                <div class="card-body">
                    <nav aria-label="breadcrumb" style="margin-left: 32px; margin-top: -8px;">
                        <ol class="breadcrumb mt-1">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>" style="text-decoration: none;">Career</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url() . 'Admin'; ?>" style="text-decoration: none;">List Lowongan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Divisi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="card rounded-4 border-0 shadow">
                <div class="card-body">
                    <h5 class="fw-bold text-center mt-3">Tambah Divisi</h5>
                    <div class="mt-4 mb-3">
                        <div class="container-lg">
                            <form action="">
                                <div class="mb-3">
                                    <label for="namaDivisi" class="form-label fw-semibold">Nama Divisi</label>
                                    <input type="text" class="form-control" name="namaDivisi" id="namaDivisi" placeholder="Contoh: Akunting">
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-6">
                                        <div class="d-grid">
                                            <button class="btn-mockup text-white fw-semibold btn btn-sm rounded-5" type="submit">Tambah Divisi</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card rounded-4 border-0 shadow">
                <div class="card-body">
                    <h4 class="text-center fw-bold mt-5">Divisi Di PT Nippisun Indonesia</h4>
                    <div class="row justify-content-center mt-5 mb-3">
                        <div class="col-10">
                            <div class="table-responsive">
                                <table class="table" id="tblDivisi">
                                    <thead>
                                        <tr>
                                            <th>###</th>
                                            <th>Nama Divisi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Akunting</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Produksi</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>IT</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>HR</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>GA</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>QC</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Sales</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Purchasing</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>