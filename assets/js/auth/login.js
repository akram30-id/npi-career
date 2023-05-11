import { applicant_server, base_client } from "../config.js";

$(document).ready(function () {

    $("#btn-login").on("click", function (event) {

        const email = $("#email").val()
        const password = $("#password").val()

        $(this).prop("disabled", true).text("Signing In . . . . . .")

        $.ajax({
            url: base_server + 'auth/in',
            type: 'POST',
            dataType: 'json',
            data: {
                email: email,
                password: password
            },
            success: function (result) {
                if (result.response.status == 200) {
                    window.location.href = base_client + 'apply'
                } else {
                    $("#btn-login").css({ "background-color": "#bf0016" }).text(result.response.message)
                    setTimeout(() => {
                        $("#btn-login").css({ "background-color": "#014199" }).prop("disabled", false).text("Login")
                    }, 2000);
                }
            }
        })

        event.preventDefault()

    })

})