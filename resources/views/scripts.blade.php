@section('scripts')
    <script type="text/javascript">
        const _token = $('meta[name="csrf-token"]').attr('content');
        //Add book
        $(document).on('click', '#add-button', async function () {

            let bookID = $(this).data("id");

            $.ajax({
                url:'/checkbook/' + bookID,
                type: 'GET',
                error:function (xhr, status, error) {
                   let err = JSON.parse(xhr.responseText)
                    Swal.fire({
                        title: "Error!",
                        text: err.message,
                        icon: 'error',
                        confirmButtonText: 'Confirm',
                        confirmButtonColor: '#052E45',

                    });
                }

            }).then(async (result) => {
                const inputOptions = new Promise((resolve) => {
                    setTimeout(() => {
                        resolve({
                            'true': 'Read before',
                            'false': 'Didnt read before',
                        })
                    }, 500)
                })

                const {value: readBefore} = await Swal.fire({
                    title: 'Did you read this book before?',
                    input: 'radio',
                    inputOptions: inputOptions,
                    confirmButtonColor: '#052E45',
                    inputValidator: (value) => {
                        if (!value) {
                            return 'You need to choose something!'
                        }
                    }
                })
                if (readBefore) {
                    const {value: note} = await Swal.fire({
                        input: 'textarea',
                        inputLabel: 'Do you have any notes?',
                        inputPlaceholder: 'Type your note here...',
                        inputAttributes: {
                            'aria-label': 'Type your note here'
                        },
                        showCancelButton: true,
                        confirmButtonColor: '#052E45',
                    })
                    if (readBefore === 'true') {
                        const {value: rate} = await Swal.fire({
                            title: 'Rate',
                            input: 'range',
                            inputAttributes: {
                                min: 0,
                                max: 5,
                                step: 0.1,
                            },
                            inputValue: 0,
                            showCancelButton: true,
                            confirmButtonColor: '#052E45',
                        }).then((value) => {
                            const noteToSend = note || 'null';
                            const rateToSend = value.value || '0';

                            const formData = {
                                bookID : bookID,
                                readBefore : readBefore,
                                noteToSend : noteToSend,
                                rateToSend :rateToSend
                            }

                            $.ajax({
                                url: '/store/',
                                type: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                data: formData,
                                dataType: "json",
                                encode: true,
                                success: function (response) {
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Book saved',
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                },
                                error: function (xhr, status, error) {
                                    let  err = JSON.parse(xhr.responseText)
                                    Swal.fire({
                                        title: "Error!",
                                        text: err.message,
                                        icon: 'error',
                                        confirmButtonText: 'Confirm',
                                        confirmButtonColor: '#052E45',

                                    });
                                }
                            });
                        })
                    }else{
                        const noteToSend = note || 'null';
                        const rateToSend = '0';

                        const formData = {
                            bookID: bookID,
                            readBefore : readBefore,
                            noteToSend : noteToSend,
                            rateToSend : rateToSend
                        }

                        $.ajax({
                            url: '/store',
                            data: formData,
                            headers: {
                                'X-CSRF-TOKEN': _token
                            },
                            type: 'POST',
                            dataType: "json",
                            encode: true,
                            success: function (response) {
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'Book saved',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            },
                            error: function (xhr, status, error) {
                                let  err = JSON.parse(xhr.responseText)
                                Swal.fire({
                                    title: "Error!",
                                    text: err.message,
                                    icon: 'error',
                                    confirmButtonText: 'Confirm',
                                    confirmButtonColor: '#052E45',

                                });
                            }
                        });
                    }
                }
            })
        });

        //Delete book
        $(document).on('click', '#deleteButton', function () {
            let bookID = $(this).data("id");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#052E45',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/deletebook/' + bookID,
                        type: 'GET'
                    })
                    Swal.fire({
                        title: 'Deleted!',
                        text: 'Book deleted!',
                        icon: 'success',
                        confirmButtonColor: '#052E45',
                        didClose: function () {
                            location.reload();
                        }
                    })
                }
            })

        });

        //Change Book read field
        $(document).on('click', '#alreadyReadChangeBtn', function () {
            let bookID = $(this).data("id");
            let read = 1;

            $.ajax({
                url: '/changeread/' + bookID + '/' + read,
                type: 'GET',
                success: function () {
                    Swal.fire({
                            title: 'Changed!',
                            text: 'Book list changed to already read!',
                            icon: 'success',
                            confirmButtonColor: '#052E45',
                            didClose: function () {
                                location.reload();
                            }
                        }
                    )
                },
                error: function (xhr, response, error) {
                  let err = JSON.parse(xhr.responseText)
                    Swal.fire({
                        title: "Error!",
                        text: err.message,
                        icon: 'error',
                        confirmButtonText: 'Confirm',
                        confirmButtonColor: '#052E45',

                    });
                }
            })
        });

        $(document).on('click', '#willReadChangeBtn', function () {
            let bookID = $(this).data("id");
            let read = 0;

            $.ajax({
                url: '/changeread/' + bookID + '/' + read,
                type: 'GET',
                success: function () {
                    Swal.fire({
                        title: 'Changed!',
                        text: 'Book list changed to will read!',
                        icon: 'success',
                        confirmButtonColor: '#052E45',
                        didClose: function () {
                            location.reload();
                        }
                    })
                },
                error: function (xhr, response, error) {
                   let err = JSON.parse(xhr.responseText)
                    Swal.fire({
                        title: "Error!",
                        text: err.message,
                        icon: 'error',
                        confirmButtonText: 'Confirm',
                        confirmButtonColor: '#052E45',

                    });
                }
            })
        });

        //Book note manipulation
        $(document).on('click', '#viewNotesButton', async function () {
            let note = $(this).data("note")
            let title = $(this).data("title")
            let bookID = $(this).data('id')
            Swal.fire({
                title: title,
                text: note,
                showConfirmButton: true,
                confirmButtonText: "Edit",
                confirmButtonColor: '#052E45',
                showCancelButton: true,
                cancelButtonText: "Close",
            }).then(async (result) => {
                if (result.isConfirmed) {

                    const {value: text} = await Swal.fire({
                        input: 'textarea',
                        inputLabel: 'Note',
                        inputPlaceholder: 'Type your note here...',
                        inputAttributes: {
                            'aria-label': 'Type your note here',
                        },
                        inputValue: note,
                        showCancelButton: true,
                        confirmButtonColor: '#052E45',
                    })
                    if (text) {
                        Swal.showLoading();
                        $.ajax({
                                url: '/changenote/' + bookID + '/' + text,
                                type: "GET",
                                success: function () {
                                    Swal.fire({
                                        title: 'Changed!',
                                        text: 'Note has been changed.',
                                        icon: 'success',
                                        confirmButtonText: 'Confirm',
                                        confirmButtonColor: '#052E45',
                                        didClose: function () {
                                            location.reload();
                                        }
                                    });
                                },
                                error: function (xhr, response, error) {
                                    let err = JSON.parse(xhr.responseText)
                                    Swal.fire({
                                        title: "Error!",
                                        text: err.message,
                                        icon: 'error',
                                        confirmButtonText: 'Confirm',
                                        confirmButtonColor: '#052E45',

                                    });
                                }
                            }
                        )
                    }
                }
            })
        })

        //Contact form submit
        $(document).on('submit', '#contactUSForm', function (e) {
            e.preventDefault();
            let formData = $(this).serialize();
            Swal.showLoading();
            $.ajax({
                url: 'contact',
                type: 'POST',
                data: formData,
                success: function () {
                    Swal.fire({
                        title: 'Sent!',
                        text: 'Your contact email has been sent.',
                        icon: 'success',
                        confirmButtonText: 'Confirm',
                        confirmButtonColor: '#052E45',

                    });
                },
                error: function (xhr, status, error) {
                    let err = JSON.parse(xhr.responseText)
                    Swal.fire({
                        title: "Error!",
                        text: err.message,
                        icon: 'error',
                        confirmButtonText: 'Confirm',
                        confirmButtonColor: '#052E45',

                    });
                }
            })
        })

        //Edit Profile
        function previewProfilePhoto(event) {
            const input = event.target;
            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    const previewImage = document.getElementById('image');
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(document).on('submit', '#editProfileForm', function (e) {
            e.preventDefault();
            let formData = $(this).serialize();
            Swal.showLoading();
            $.ajax({
                url: 'editprofile',
                method: 'PUT',
                data: formData,
                success: function () {
                    Swal.fire({
                        title: 'Changed!',
                        text: 'Your profile has been modified.',
                        icon: 'success',
                        confirmButtonText: 'Confirm',
                        confirmButtonColor: '#052E45',
                    });
                },
                error: function (xhr, status, error) {
                   let err = JSON.parse(xhr.responseText)
                    Swal.fire({
                        title: "Error!",
                        text: err.message,
                        icon: 'error',
                        confirmButtonText: 'Confirm',
                        confirmButtonColor: '#052E45',

                    });
                }
            })
        })

        //BS Tabs remember state
        $('#nav-will-read-tab, #nav-already-read-tab').on('click', function (e) {
            localStorage.setItem("active-tab-id", $(e.target).attr("data-bs-target"));
        });

        let activeTabId = localStorage.getItem("active-tab-id");
        let activeTab = $(`button[data-bs-target="${activeTabId}"]`);

        if (activeTab.length == 1)
            activeTab.click();


        //Rate function
        $(document).on('click', '#rateButton', function (e) {
            let value = $(this).data("rate")
            let bookID = $(this).data("id")
            Swal.fire({
                title: 'Rate',
                input: 'range',
                inputAttributes: {
                    min: 0,
                    max: 5,
                    step: 0.1,
                },
                inputValue: value,
                showCancelButton: true,
                confirmButtonText: 'Rate',
                confirmButtonColor: '#052E45',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.showLoading();
                    $.ajax({
                            url: '/changerate/' + bookID + '/' + result.value,
                            type: "GET",
                            success: function () {
                                Swal.fire({
                                    title: 'Changed!',
                                    text: 'Rate has been changed.',
                                    icon: 'success',
                                    confirmButtonText: 'Confirm',
                                    confirmButtonColor: '#052E45',
                                    didClose: function () {
                                        location.reload();
                                    }
                                });
                            },
                            error: function (xhr, status, error) {
                               let err = JSON.parse(xhr.responseText)
                                Swal.fire({
                                    title: "Error!",
                                    text: err.message,
                                    icon: 'error',
                                    confirmButtonText: 'Confirm',
                                    confirmButtonColor: '#052E45',

                                });
                            }
                        }
                    )
                }
            })
        })

    </script>

@endsection
