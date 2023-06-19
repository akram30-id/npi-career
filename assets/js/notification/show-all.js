import { applicant_server, base_client } from "../config.js"
import { getAuthStatus } from "../auth/auth-session.js";


export const timeNote = function (sentTime) {
    const d = new Date(sentTime)
    const dNow = new Date()

    let recent = ""
    if (parseInt(dNow.getFullYear()) == parseInt(d.getFullYear())) {
        if (parseInt(dNow.getMonth()) == parseInt(d.getMonth())) {
            if (parseInt(dNow.getDate()) == parseInt(d.getDate())) {
                if (parseInt(dNow.getHours()) == parseInt(d.getHours())) {
                    if (parseInt(dNow.getMinutes()) == parseInt(d.getMinutes())) {
                        let gap = parseInt(dNow.getSeconds()) - parseInt(d.getSeconds())
                        recent = `${gap} detik yang lalu`
                    } else {
                        let gap = parseInt(dNow.getMinutes()) - parseInt(d.getMinutes())
                        recent = `${gap} menit yang lalu`
                    }
                } else {
                    let gap = parseInt(dNow.getHours()) - parseInt(d.getHours())
                    recent = `${gap} jam yang lalu`
                }
            } else {
                let gap = parseInt(dNow.getDate()) - parseInt(d.getDate())
                recent = `${gap} hari yang lalu`
            }
        } else {
            let gap = parseInt(dNow.getMonth()) - parseInt(d.getMonth())
            recent = `${gap} bulan yang lalu`
        }
    } else {
        let gap = parseInt(dNow.getFullYear()) - parseInt(d.getFullYear())
        recent = `${gap} tahun yang lalu`
    }

    return recent
}

const showAll = function () {
    const idAccount = $("#account").data('id')

    $.ajax({
        url: applicant_server + 'notif/show-all/' + idAccount + '/' + 0,
        type: 'GET',
        dataType: 'JSON',
        statusCode: {
            200: function (response) {
                console.info(response.data)

                response.data.notif_items.forEach(notif => {

                    if (notif.opened == 1) {
                        $(".offcanvas-body").append(`
                            <div class="card mb-3" style="cursor: pointer;" onclick="window.location.href='${base_client}notification/detail/${notif.id_notification}/${notif.id_loker}'">
                                <div class="card-header text-bg-outline-primary">HRD Staff</div>
                                <div class="card-body">
                                    <small class="mb-2 id-loker" data-id="${notif.id_loker}"><i>#${notif.id_loker}</i></small>
                                    <h4 class="card-text">${notif.subject}</h4>
                                    <p style="width: 270px; white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">${notif.message}</p>
                                    <small class="text-end"><i>${timeNote(notif.sent_at)}</i></small>
                                </div>
                            </div>
                        `)
                    } else {
                        $(".offcanvas-body").append(`
                            <div class="card mb-3" style="cursor: pointer;" onclick="window.location.href='${base_client}notification/detail/${notif.id_notification}/${notif.id_loker}'">
                                <div class="card-header text-bg-primary">HRD Staff</div>
                                <div class="card-body">
                                <small class="mb-2 id-loker" data-id="${notif.id_loker}"><i>#${notif.id_loker}</i></small>
                                    <h4 class="card-text">${notif.subject}</h4>
                                    <p style="width: 270px; white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">${notif.message}</p>
                                    <small class="text-end"><i>${timeNote(notif.sent_at)}</i></small>
                                </div>
                            </div>
                        `)
                    }

                });

                $("#total-notif").text(response.data.total == 0 ? "" : response.data.total)
            }
        }
    })
}

getAuthStatus()

showAll()