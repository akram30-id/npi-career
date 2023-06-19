import { applicant_server } from "../config.js";

export const getAuthStatus = () => {
    $.ajax({
        url: applicant_server + 'auth/sess',
        type: 'GET',
        dataType: 'JSON',
        async: false,
        statusCode: {
            200: function (result) {
                if (result.data.token == null || result.data.token == undefined) {
                    $("#account").hide()
                } else {
                    $("#account").show()
                    $("#btn-logout").attr("data-email", result.data.email)

                    $("#account").attr("data-id", result.data.id)
                }
            },
        },
    })
}