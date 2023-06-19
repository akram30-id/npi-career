<input type="hidden" name="" id="id-notif" value="<?= $id_notif ?>">

<div class="container">
    <div class="card mt-5 border-0 shadow-lg" style="border-radius: 16px;">
        <div class="card-body p-5">
            <div class="d-flex">
                <h4><i class="bi bi-person-circle"></i> HRD Staff</h4>
            </div>
            <div class="d-flex mt-2">
                <h5>Subjek: <span id="subjek">Loading . . . .</span></h5>
            </div>
            <div class="d-flex mb-4">
                <small><i><span id="timeRecent">Loading . . . .</span></i></small>
            </div>
            <hr>
            <div class="d-flex">
                <p id="pesan">Loading . . . .</p>
            </div>
            <div class="d-flex justify-content-end mb-3">
                <button class="btn btn-sm btn-primary rounded-pill" data-bs-toggle="collapse" data-bs-target="#collapseExample"><i class="bi bi-reply"></i> Balas</button>
            </div>
            <div class="collapse" id="collapseExample">
                <div class="card border-0 shadow p-3">
                    <div class="card-body p-3">
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subjek</label>
                            <input type="text" class="form-control" style="border: 1px solid #000;" id="subject">
                            <input type="hidden" id="id-loker" value="<?= $id_loker ?>">
                        </div>
                        <div class="mb-3">
                            <label for="reply" class="form-label">Pesan</label>
                            <textarea class="form-control" style="border: 1px solid #000;" id="reply" rows="5"></textarea>
                        </div>
                        <div class="mb-1">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary" id="btn-send-reply">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>