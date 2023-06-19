import { applicant_server, base_client } from '../config.js'

$(document).ready(function () {

    const AddApplicant = () => {

        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    } else {
                        // data referensi
                        const referensi = $("#input-referensi").val()
                        const pitch = $("#input-pitch").val()
                        const id_vacancy = $("#id-loker").val()

                        let mainRequirement = 0
                        $('.main-check').each(function () {
                            let isChecked = $(this).is(':checked')
                            if (isChecked) {
                                mainRequirement += parseFloat($(this).val())
                            }
                        })

                        let additionalReq = 0
                        $('.additional-check').each(function () {
                            let isChecked = $(this).is(':checked')
                            if (isChecked) {
                                additionalReq += Math.floor(parseFloat($(this).val()))
                            }
                        })

                        console.info(mainRequirement)
                        console.info(additionalReq)
                        console.info(referensi)
                        console.info(pitch)
                        console.info(id_vacancy)

                        $.ajax({
                            url: applicant_server + 'auth/sess',
                            type: 'GET',
                            dataType: 'JSON',
                            statusCode: {
                                200: function (response) {
                                    const id = response.data.id

                                    $.ajax({
                                        url: applicant_server + 'detail/id/' + id_vacancy,
                                        type: 'GET',
                                        dataType: 'JSON',
                                        success: function (result) {
                                            const data = result.response.data

                                            $.ajax({
                                                url: applicant_server + 'apply/lamar-pekerjaan',
                                                type: 'POST',
                                                data: {
                                                    referensi: referensi,
                                                    pitch: pitch,
                                                    idVacancy: id_vacancy,
                                                    mainRequirement: mainRequirement,
                                                    additionalReq: additionalReq,
                                                    idAccount: id,
                                                    pendidikanRequirement: data.pendidikan[0].value,
                                                },
                                                statusCode: {
                                                    200: function (response) {
                                                        alert(response.message)
                                                    },
                                                    201: function (response) {
                                                        $("#exampleModal").modal("show")
                                                        $("#success-submit").prop('href', `${base_client}apply/${id_vacancy}`)
                                                        $("#vacancy-alert").text(response.message)
                                                    },
                                                    404: function (response) {
                                                        alert(response.message)
                                                    },
                                                    500: function (response) {
                                                        console.info(response.data)
                                                    }
                                                }
                                            })
                                        }
                                    })

                                }
                            }
                        })

                        event.preventDefault()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()

    }

    AddApplicant()

})