import { applicant_server } from "../config.js";

$(document).ready(function () {
    const getAuthStatus = function () {
        let response = false
        $.ajax({
            url: applicant_server + 'auth/sess',
            type: 'GET',
            dataType: 'JSON',
            statusCode: {
                200: function (result) {
                    if (result.data.token == null || result.data.token == undefined) {
                        response = false
                    } else {
                        response = true
                    }
                },
            },
        })

        return response
    }

    // $(".btn-apply").on("click", "#content-vacancy", function () {
        console.info(getAuthStatus())
    //     console.info($(this).data('idVacancy'))
    // })
})
