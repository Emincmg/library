@section('scripts')
    <script type="text/javascript">

        //Add will book list
        $(document).on('click','#willReadButton' ,function (){
            let bookID = $(this).data("id");

            $.ajax({
                url: '/insertWillReadBook/'+ bookID,
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
        });
        //Add already read book list
        $(document).on('click','#alreadyReadButton',function (){
            let bookID = $(this).data("id");

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
    </script>
@endsection
