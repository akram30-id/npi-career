import { applicant_server } from "../config.js";

const sendReply = function () {
    const subject = $("#subject").val()
    const pesan = $("#reply").val()
    const idLoker = $("#id-loker").val()

    console.info(subject)
    console.info(pesan)
    
    $.ajax({
        url: applicant_server + 'notif/send/' + 12 + '/' + idLoker,
        type: 'POST',
        dataType: 'JSON',
        data: {
            sender: $("#account").data('id'),
            subjek: subject,
            pesan: pesan
        },
        statusCode: {
            201: function (response) {
                alert(response.message)
                window.history.go(-1)
            },
            500: function (response) {
                alert('Ada Kesalahan di Server')
                console.info(response.message)
            }
        }
    })
}

$("#btn-send-reply").on("click", function () {
    sendReply()
})