import { applicant_server, base_client } from "../config.js";

$(document).ready(function () {
    const getAuthStatus = function () {
        const idLoker = $("#id-loker").val()
        $.ajax({
            url: applicant_server + 'auth/sess',
            type: 'GET',
            dataType: 'JSON',
            statusCode: {
                200: function (result) {
                    if (result.data.token == null || result.data.token == undefined) {
                        $("#account").hide()
                        window.location.href = base_client + 'auth/login/' + idLoker
                    } else {
                        $("#account").show()
                        $("#btn-logout").attr("data-email", result.data.email)

                        const id = result.data.id
                        checkIsPersonalExist(idLoker, id, result.data.email.replace(/\@/g, '_'))
                    }
                },
            },
        })
    }

    const checkIsPersonalExist = function (idLoker, id, email) {
        $.ajax({
            url: applicant_server + 'auth/personal/' + id,
            type: 'POST',
            dataType: 'JSON',
            statusCode: {
                404: function () {
                    window.location.href = base_client + 'auth/profile/' + idLoker + '/' + id + '/' + email
                }
            }
        })
    }

    getAuthStatus()
})
