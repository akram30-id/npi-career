$("#btn-pwd-visible").on("click", function (event) {

    if ($("#password").prop("type") == "password") {
        $("#password").prop("type", "text")
        $(this).html("")
        $(this).html(`<i class="bi bi-eye-slash"></i>`)
        $(this).prop("class", "btn btn-primary")
    } else {
        $("#password").prop("type", "password")
        $(this).html("")
        $(this).html(`<i class="bi bi-eye"></i>`)
        $(this).prop("class", "btn btn-outline-primary")
    }

    event.preventDefault()

})

$("#btn-pwd-confirm-visible").on("click", function (event) {

    if ($("#confirm-password").prop("type") == "password") {
        $("#confirm-password").prop("type", "text")
        $(this).html("")
        $(this).html(`<i class="bi bi-eye-slash"></i>`)
        $(this).prop("class", "btn btn-primary")
    } else {
        $("#confirm-password").prop("type", "password")
        $(this).html("")
        $(this).html(`<i class="bi bi-eye"></i>`)
        $(this).prop("class", "btn btn-outline-primary")
    }

    event.preventDefault()

})