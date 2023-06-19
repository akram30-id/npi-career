import { applicant_server, base_client } from "../config.js";

const Main = () => {
    const idLoker = $("#id-loker").val()

    $.ajax({
        url: applicant_server + 'detail/id/' + idLoker,
        type: 'GET',
        dataType: 'JSON',
        success: function (result) {
            const data = result.response.data

            $("#detail").prop('href', base_client + 'vacancies/detail/' + data.divisi[0].id_divisi + '/' + idLoker)

            if (data !== undefined) {
                $(".vacancy").text(data.vacancy[0].posisi)

                // VAKSIN
                $("#kemampuan").append(`
                    <div class="col-sm-6 mb-3">
                        <input class="form-check-input main-check" type="checkbox" value="10" id="vaksin">
                        <label class="form-check-label" for="vaksin">
                            Vaksin ${data.persyaratan[0].dosis_vaksin}
                        </label>
                    </div>                    
                `)

                // BIDANG PENGALAMAN
                $("#kemampuan").append(`
                    <div class="col-sm-6 mb-3">
                        <input class="form-check-input main-check" type="checkbox" value="30" id="pengalaman">
                        <label class="form-check-label" for="pengalaman">
                            Berpengalaman lebih dari ${data.pengalaman[0].min_lama_pengalaman} Tahun di Bidang ${data.pengalaman[0].bidang_pengalaman}
                        </label>
                    </div>                    
                `)

                // PERSYARATAN TAMBAHAN
                const tambahanPersyaratanTotal = data.tambahan_persyaratan.length

                for (let i = 0; i < data.tambahan_persyaratan.length; i++) {
                    $("#kemampuan").append(`
                        <div class="col-sm-6 mb-3">
                            <input class="form-check-input additional-check" type="checkbox" value="${100 / tambahanPersyaratanTotal}" id="tambahan-syarat-${i + 1}">
                            <label class="form-check-label">
                                ${data.tambahan_persyaratan[i].tambahan_persyaratan}
                            </label>
                        </div>                    
                    `)
                }
            } else {
                alert(result.response.message)
            }
        }
    })

}

Main()
