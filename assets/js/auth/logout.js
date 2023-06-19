import { applicant_server, base_client } from "../config.js";

const logout = function (email) {
    $.ajax({
        url: applicant_server + 'auth/out',
        type: 'POST',
        data: {
            email: email
        },
        statusCode: {
            200: function (result) {
                $("#account").hide()
                alert(result.message)
                window.location.href = base_client + 'vacancies'
            },
            500: function (result) {
                alert(result.message)
            },
            401: function (result) {
                alert(result.message)
            }
        }
    })
}

$("#btn-logout").on("click", function () {
    let email = $(this).data('email')

    if (email == undefined) {
       email = $("#input-email").val()
    }

    logout(email)
})