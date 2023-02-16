import { applicant_server, base_client } from "../../config.js";

$(document).ready(function () {
    const id_divisi = $("#divisi").attr('data-id')

    const FilterVacancy = () => {
        const status = $("#sort-status").val()
        const level = $("#sort-level").val()

        $.ajax({
            url: applicant_server + 'vacancies/filter/divisi/' + id_divisi,
            type: "GET",
            dataType: 'json',
            data: {
                level: level,
            },
            success: function (result) {
                if (result.response.status == 200) {
                    $("#vacancy-divisi-content").html("")
                    $(".pagination").html("")
                    $("#alert-search").html("")

                    let content = ''

                    for (let i = 0; i < result.response.data.length; i++) {
                        const posisi = result.response.data[i].posisi
                        const min_salary = result.response.data[i].min_salary
                        const max_salary = result.response.data[i].max_salary
                        let level = result.response.data[i].level
                        const created_at = result.response.data[i].created_at
                        const id_vacancy = result.response.data[i].id_vacancy
                        const status = result.response.data[i].status

                        const origin = new Date(`${created_at}`)
                        const now = new Date()

                        let dateDiff = ''

                        if (origin.getFullYear() == now.getFullYear()) {
                            if (origin.getMonth() == now.getMonth()) {
                                if (origin.getDate() == now.getDate()) {
                                    if (origin.getHours() == now.getHours()) {
                                        if (origin.getMinutes() == now.getMinutes()) {
                                            dateDiff = `Diupload ${(now.getSeconds()) - (origin.getSeconds())} detik yang lalu`
                                        } else {
                                            dateDiff = `Diupload ${(now.getMinutes()) - (origin.getMinutes())} menit yang lalu`
                                        }
                                    } else {
                                        dateDiff = `Diupload ${(now.getHours()) - (origin.getHours())} jam yang lalu`
                                    }
                                } else {
                                    dateDiff = `Diupload ${(now.getDate()) - (origin.getDate())} hari yang lalu`
                                }
                            } else {
                                dateDiff = `Diupload ${(now.getMonth()) - (origin.getMonth())} bulan yang lalu`
                            }
                        } else {
                            dateDiff = `Diupload ${(now.getFullYear()) - (origin.getFullYear())} tahun yang lalu`
                        }

                        switch (level) {
                            case "1":
                                level = "PKL"
                                break;

                            case "2":
                                level = "Magang"
                                break;

                            case "3":
                                level = "Entry Level"
                                break;

                            case "4":
                                level = "Experienced"
                                break;

                            case "5":
                                level = "Manager"
                                break;

                            default:
                                level = ""
                                break;
                        }

                        let salary = ''
                        if (min_salary == "0" && max_salary == "0") {
                            salary = 'Negotiable Salary'
                        } else {
                            salary = `Rp.${min_salary.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")} - Rp.${max_salary.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")}`
                        }

                        content = `
                        <div class="col-sm-4 mb-3">
                            <div class="card rounded-4 shadow-lg border-0">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center mb-1 mt-3">
                                        <h5 class="fw-bold"><a href="${base_client}vacancies/detail/${id_divisi}/${id_vacancy}" class="text-decoration-none">${posisi}</a></h5>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-10">
                                            <p class="fw-semibold text-center" style="font-size: 9pt;">${salary}</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <div class="row justify-content-evenly">
                                                <div class="col-1">
                                                    <i class="fa-solid fa-signal fa-xs"></i>
                                                </div>
                                                <div class="col-9">
                                                    <p class="fw-semibold" style="font-size: 9pt; margin-top: 2px;">${level}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 align-items-center">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="fw-semibold" style="font-size: 9pt; margin-top: 2px;"><i>${dateDiff}</i></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center" style="margin-top: -24px;">
                                        <div class="col-sm-10">
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mb-3">
                                        <div class="col-sm-10">
                                            <div class="d-grid gap-2">
                                                <a href="${base_client}apply/${id_vacancy}" class="btn btn-mockup fw-bold text-white rounded-5">Lamar</a>
                                                <a href="${base_client}vacancies/detail/${id_divisi}/${id_vacancy}" class="btn btn-secondary fw-bold rounded-5" type="button">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `

                        $("#vacancy-divisi-content").append(content)
                    }
                } else if (result.response.status == 404) {
                    $("#alert-search").html(`
                        <h3 class="text-center fw-bold">No Result for Sorting</h3>
                    `)
                    $("#vacancy-divisi-content").html("")
                } else {
                    alert('Internal Server Error')
                }
            }
        })
    }

    $("#btn-filter-vacancy").on("click", function (event) {
        FilterVacancy()
        event.preventDefault()
    })

})