@section('scripts')
    <script type="text/javascript">
        //Alertify override defaults
        alertify.defaults.transition = "zoom";
        alertify.defaults.theme.ok = 'btn btn-success';
        alertify.defaults.theme.cancel = 'btn btn-light';
        alertify.defaults.theme.input = 'form-control';

        //Addbook Form Submit
        $('#addBookForm').on('submit', function (e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: '/addbook',
                type: 'POST',
                data: formData,
                success: function (response) {
                    alertify.notify(response.message, 'success', 2, function () {
                        window.location.href = '{{'/'}}';
                    });
                },
                error: function (xhr, status, error) {
                    let message = JSON.parse(xhr.responseText).message;
                    if (xhr.status === 404) {
                        alertify.confirm(message, function () {
                        }).setHeader('Notice').set('labels', {ok: 'Yes', cancel: 'No'}).set('onok', function () {
                            window.location.href = '{{'addauthorpage'}}';
                        });
                    } else {
                        $('#addBook-errors').empty().show().html('').delay(3000).fadeOut(500);
                        $('#addBook-errors').append('<div class="alert alert-danger">' + message + '</div>');
                        alertify.error(message, 2)
                    }
                },
            });
        });

        //Addauthor Form Submit
        $('#addAuthorForm').on('submit', function (e) {
            e.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                url: '/addauthor',
                type: 'POST',
                data: formData,
                success: function (response) {
                    alertify.notify(response.message, 'success', 2, function () {
                            window.location.href = '{{'addbookpage'}}';
                    });
                },
                error: function (xhr, status, error) {
                    let message = JSON.parse(xhr.responseText).message;
                    $('#addAuthor-errors').empty().show().html('').delay(3000).fadeOut(500);
                    $.each(xhr.responseJSON, function (key, value) {
                        $('#addAuthor-errors').append('<div class="alert alert-danger">' + value + '</div>');
                    });
                    alertify.error(message, 2);
                }
            });
        })

        //Editbook Form Submit
        $('#editBookForm').on('submit',function (e){
            e.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                url: '/editbook',
                type: 'POST',
                data: formData,
                success: function (response) {
                    alertify.notify(response.message, 'success', 2, function () {
                        window.location.href = '{{'/'}}';
                    });
                },
                error: function (xhr, status, error) {
                    let message = JSON.parse(xhr.responseText).message;
                    $('#addAuthor-errors').empty().show().html('').delay(3000).fadeOut(500);
                    $.each(xhr.responseJSON, function (key, value) {
                        $('#editBook-errors').append('<div class="alert alert-danger">' + value + '</div>');
                    });
                    alertify.error(message, 2);
                }
            });
        })

        //Addbook category select jQuery plugin
        $(document).ready(function () {
            var classes = {
                1: 'category-option-class-1',
                2: 'category-option-class-2',
            };
            $('#category-select').picker({
                search: true,
                coloring: classes,
            });
        });

        //Add to will book list button
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
        //Add to already read book list button
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
