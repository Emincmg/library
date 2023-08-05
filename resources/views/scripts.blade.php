@section('scripts')
    <script type="text/javascript">

        //Add will book list
        $(document).on('click','#add-button' ,async function () {
            let bookID = $(this).data("id");

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
                inputValidator: (value) => {
                    if (!value) {
                        return 'You need to choose something!'
                    }
                }

            })
            if (readBefore) {
                const { value: note } = await Swal.fire({
                    input: 'textarea',
                    inputLabel: 'Do you have any notes?',
                    inputPlaceholder: 'Type your message here...',
                    inputAttributes: {
                        'aria-label': 'Type your message here'
                    },
                    showCancelButton: true
                })

                if (note) {
                    if(readBefore === "true"){
                        $.ajax({
                            url: '/insertAlreadyReadBook/'+ bookID,
                            type: 'GET',
                            success: function (response) {
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'Book saved',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            },
                            error: function (xhr, status, error){
                                let message = JSON.parse(xhr.responseText).message;
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'error',
                                    title: message,
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                        })
                    }else{
                        $.ajax({
                            url: '/insertWillReadBook/' + bookID,
                            type: 'GET',
                            success: function (response) {
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'Book saved',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            },
                            error: function (xhr, status, error) {
                                let message = JSON.parse(xhr.responseText).message;
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'error',
                                    title: message,
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                        })
                    }
                }
            }
        });
        //Add already read book list
        $(document).on('click','#alreadyReadButton',function (){
            let bookID = $(this).data("id");


        });

        $(document).on('click','#deleteButton',function (){
            let bookID = $(this).data("id");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url:'/deletebook/'+bookID,
                        type:'GET'
                    })
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                    setTimeout(function() {
                        location.reload();
                    }, 1500);
                }
            })

        });

        $(document).on('click','#alreadyReadChangeBtn',function (){
            let bookID = $(this).data("id");
            let read = 1;

            $.ajax({
                url:'/changeread/'+bookID +'/'+ read,
                type:'GET',
                success:function (){
                    Swal.fire(
                        'Changed!',
                        'Book list changed to already read!',
                        'success'
                    )
                }
            })

            setTimeout(function() {
                location.reload();
            }, 1500);
        });

        $(document).on('click','#willReadChangeBtn',function (){
            let bookID = $(this).data("id");
            let read = 0;

            $.ajax({
                url:'/changeread/'+bookID +'/'+ read,
                type:'GET',
                success:function (){
                    Swal.fire(
                        'Changed!',
                        'Book list changed to already read!',
                        'success'
                    )
                }
            })

            setTimeout(function() {
                location.reload();
            }, 1500);
        });

        $(document).on('submit','#contactUSForm',function (e){
            e.preventDefault();
            let formData = $(this).serialize();
            Swal.showLoading();
            $.ajax({
                url:'contact',
                type:'POST',
                data: formData,
                success:function (){
                    Swal.fire(
                        'Sent!',
                        'Your contact email has been sent.',
                        'success'
                    )},
                error: function(xhr, status, error) {
                    Swal.fire(
                        'Error!',
                        error.message,
                        'error'
                    );
                }
            })
        })
    </script>
@endsection
