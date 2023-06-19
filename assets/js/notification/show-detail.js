import { applicant_server } from '../config.js'
import { timeNote } from './show-all.js'

const opened = function() {
    const idNotif = $("#id-notif").val()

    $.ajax({
        url: applicant_server + 'notif/set-read/' + idNotif,
        type: 'POST',
        dataType: 'JSON',
        statusCode: {
            200: function () {
                $.ajax({
                    url: applicant_server + 'notif/read/' + idNotif,
                    type: 'GET',
                    dataType: 'JSON',
                    statusCode: {
                        200: function (response) {
                            console.info(response.data)
                            $("#pesan").html(response.data[0].message.replace(/\n/g, '<br />'))
                            $("#subjek").html(response.data[0].subject)
                            $("#timeRecent").text(timeNote(response.data[0].sent_at))
                        }
                    }
                })
            }
        }
    })
}

opened()