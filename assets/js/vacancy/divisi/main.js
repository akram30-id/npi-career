import { base_client, applicant_server } from '../../config.js'

const Main = () => {

    const id_divisi = $("#divisi").attr('data-id')

    const showVacancyList = (page = 1) => {

        $("#vacancy-divisi-content").html("")
        $(".pagination").html("")

        $.ajax({
            url: applicant_server + 'vacancies/divisi/' + id_divisi + '/' + page,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
                console.info(result)
                if (result.response.status == 200) {

                    const nama_divisi = result.response.data[0].nama_divisi
                    $(".nama-divisi").text(nama_divisi)

                    const pageCount = result.response.page_count

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

                    // PAGINATION SECTION
                    let disabled_prev = ''
                    if (page == 1) {
                        disabled_prev = 'disabled'
                    }
                    $(".pagination").append(`
                            <li class="page-item ${disabled_prev}">
                                <a class="page-link" id="btn-prev" data-page="${page}">Previous</a>
                            </li>
                        `)

                    for (let k = 1; k <= pageCount; k++) {
                        let active = ''
                        if (k == page) {
                            active = 'active'
                        } else {
                            active = ''
                        }

                        $(".pagination").append(`
                                <li class="page-item ${active}">
                                    <a class="page-link btn-page" data-page="${k}" href="#">${k}</a>
                                </li>
                            `)
                    }

                    let disabled_next = ''
                    if (page == pageCount) {
                        disabled_next = 'disabled'
                    }
                    $(".pagination").append(`
                            <li class="page-item ${disabled_next}">
                                <a class="page-link" id="btn-next" data-page="${page} href="#">Next</a>
                            </li>
                        `)

                    // END OF PAGINATION SECTION

                } else {

                }
            }
        })
    }

    showVacancyList()

    // PAGE MOVE
    $(".pagination").on("click", ".btn-page", function () {
        let id_page = $(this).data('page')

        showVacancyList(parseInt(id_page))

        id_page = ''
    })

    $(".pagination").on("click", "#btn-prev", function () {
        let page = $(this).data('page')
        let prev_page = parseInt(page) - 1

        showVacancyList(parseInt(prev_page))

        page = ''
        prev_page = ''
    })

    $(".pagination").on("click", "#btn-next", function () {
        let page = $(this).data('page')
        let next_page = parseInt(page) + 1

        showVacancyList(parseInt(next_page))

        page = ''
        next_page = ''
    })
}

Main()

export { Main }