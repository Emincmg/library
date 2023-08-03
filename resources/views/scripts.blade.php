@section('scripts')
    <script type="text/javascript">

        //Alertify theme
        alertify.defaults.transition = "zoom";
        alertify.defaults.theme.ok = 'btn btn-success';
        alertify.defaults.theme.cancel = 'btn btn-light';
        alertify.defaults.theme.input = 'form-control';


        //Add will book list
        $(document).on('click','#willReadButton' ,function (){
            let bookID = $(this).data("id");
            console.log('tiklandi')
            $.ajax({
                url: '/insertWillReadBook/'+ bookID,
                type: 'GET',
                success: function (response) {
                    // alertify.notify(response.message, 'success', 2, function () {
                    // });
                },
                error: function (xhr, status, error){
                    // let message = JSON.parse(xhr.responseText).message;
                    // $('#addAuthor-errors').empty().show().html('').delay(3000).fadeOut(500);
                    // $.each(xhr.responseJSON, function (key, value) {
                    // });
                    // alertify.error(message, 2);
                }
            })
        });
        //Add already read book list
        $(document).on('click','#alreadyReadButton',function (){
            let bookID = $(this).data("id");
            console.log('tıklandı')
            $.ajax({
                url: '/insertAlreadyReadBook/'+ bookID,
                type: 'GET',
                success: function (response) {
                    // alertify.notify(response.message, 'success', 2, function () {
                    // });
                },
                error: function (xhr, status, error){
                    // let message = JSON.parse(xhr.responseText).message;
                    // $('#addAuthor-errors').empty().show().html('').delay(3000).fadeOut(500);
                    // $.each(xhr.responseJSON, function (key, value) {
                    // });
                    // alertify.error(message, 2);
                }
            })
        });

    </script>
@endsection
