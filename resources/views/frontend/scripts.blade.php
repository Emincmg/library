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
                success:function (response) {
                    alertify.notify(response.message, 'success', 2, function () {
                        window.location.href = '{{'/'}}';
                    });
                },
                error: function (xhr, status, error) {
                    let message = JSON.parse(xhr.responseText).message;
                    if(xhr.status === 404){
                        alertify.confirm(message, function () {
                        }).setHeader('Notice').set('labels', {ok: 'Yes', cancel: 'No'}).set('onok', function () {
                            window.location.href = '{{'addauthorpage'}}'
                        });
                    }else{
                        $('#addBook-errors').empty().show().html('').delay(3000).fadeOut(500);
                        $.each(xhr.responseJSON.errors, function (key, value) {
                            $('#addBook-errors').append('<div class="alert alert-danger">' + value + '</div>');
                        });
                        alertify.error(message,2)
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
                        window.location.href = '{{'/'}}';
                    });
                },
                error: function (xhr, status, error) {
                    let message = JSON.parse(xhr.responseText).message;

                    $('#addAuthor-errors').empty().show().html('').delay(3000).fadeOut(500);
                    $.each(xhr.responseJSON.errors, function (key, value) {
                        $('#addAuthor-errors').append('<div class="alert alert-danger">' + value + '</div>');
                    });
                    alertify.error(message,2);
                }
            });
        })

        //Addbook category select
        $( document ).ready(function() {
            var classes = {
                1 : 'category-option-class-1',
                2 : 'category-option-class-2',
            };
            $('#category-select').picker({
                search: true,
                containerClass: 'category-select',
                containerWidth: 1080,
                width: 1080,
                coloring:classes,
            });
        });
    </script>
@endsection