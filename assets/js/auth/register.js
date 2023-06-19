import { applicant_server, base_client } from "../config.js";

const register = function (email, password) {
    const idLoker = $("#id-loker").val()
    $.ajax({
        url: applicant_server + 'auth/reg',
        type: 'POST',
        dataType: 'json',
        data: {
            email: email,
            password: password
        },
        statusCode: {
            201: function (response) {
                alert(response.message)
                window.location.href = base_client + 'auth/login/' + idLoker
            },
            200: function (response) {
                alert(response.message)
            },
            500: function (response) {
                alert(response.message)
                console.info(response.data)
            }
        },
    })
}

const validateForm = function (email, password, confirmPwd) {
    if (password !== confirmPwd) {
        alert('Password dan Konfirmasi Password tidak sama.')
        exit()
    } else {
        if (email == "" || email == undefined) {
            alert('Email Wajib Diisi')
            exit()
        }

        const testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i
        if (testEmail.test(email) == false) {
            alert('Bukan Email')
            exit()
        }

        if (password == "" || password == undefined) {
            alert('Password Wajib Diisi')
            exit()
        }

        if (confirmPwd == "" || confirmPwd == undefined) {
            alert('Konfirmasi Password Wajib Diisi')
            exit()
        }
    }
}

$("#btn-register").on("click", function (event) {

    const email = $('#email').val()
    const password = $('#password').val()
    const confirmPwd = $('#confirm-password').val()

    validateForm(email, password, confirmPwd)

    register(email, password)

    event.preventDefault()

})