import { applicant_server, base_client } from "../config.js";

$(document).ready(function () {

    $("#btn-login").on("click", function (event) {

        const email = $("#email").val()
        const password = $("#password").val()
        const idLoker = $("#id-loker").val()

        $(this).prop("disabled", true).text("Signing In . . . . . .")

        const restLogin = function () {
            $.ajax({
                url: applicant_server + 'auth/in',
                type: 'POST',
                dataType: 'json',
                data: {
                    email: email,
                    password: password
                },
                statusCode: {
                    200: function () {
                        window.location.href = base_client + 'apply/' + idLoker
                    },
                    401: function () {
                        $("#btn-login").css({ "background-color": "#bf0016" }).text("Password Salah")
                        setTimeout(() => {
                            $("#btn-login").css({ "background-color": "#014199" }).prop("disabled", false).text("Login")
                        }, 2000);
                    },
                    404: function () {
                        $("#btn-login").css({ "background-color": "#bf0016" }).text("Akun Tidak Ditemukan")
                        setTimeout(() => {
                            $("#btn-login").css({ "background-color": "#014199" }).prop("disabled", false).text("Login")
                        }, 2000);
                    },
                    500: function () {
                        $("#btn-login").css({ "background-color": "#bf0016" }).text("Server Error")
                        setTimeout(() => {
                            $("#btn-login").css({ "background-color": "#014199" }).prop("disabled", false).text("Login")
                        }, 2000);
                    }
                }
            })
        }

        const passwordEmpty = function () {
            $("#btn-login").css({ "background-color": "#bf0016" }).text("Password Wajib Diisi")
            setTimeout(() => {
                $("#btn-login").css({ "background-color": "#014199" }).prop("disabled", false).text("Login")
            }, 2000);
        }

        const emailEmpty = function () {
            $("#btn-login").css({ "background-color": "#bf0016" }).text("Email Wajib Diisi")
            setTimeout(() => {
                $("#btn-login").css({ "background-color": "#014199" }).prop("disabled", false).text("Login")
            }, 2000);
        }

        const testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i
        const isInputEmail = function () {
            if (testEmail.test(email)) {
                restLogin()
            } else {
                $("#btn-login").css({ "background-color": "#bf0016" }).text("Bukan Email")
                setTimeout(() => {
                    $("#btn-login").css({ "background-color": "#014199" }).prop("disabled", false).text("Login")
                }, 2000);
            }
        }

        if (email == null || email == undefined || email == "") {
            emailEmpty()
        } else if (password == null || password == undefined || password == "") {
            passwordEmpty()
        } else {
            isInputEmail()
        }

        event.preventDefault()

    })

})