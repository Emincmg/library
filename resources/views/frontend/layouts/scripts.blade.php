@section('scripts')
    <script type="text/javascript">
        //View clicked book modal
        $(document).on('click','.bookName', function (e) {
            var elemId = $(this).attr('id');
            $.ajax({
                type: 'GET',
                url: 'getdetailbook/' + elemId,
                success: function (data) {
                        $('#book_dtl_title').text(data.book_title + " - " + data.book_author);
                        $('#book_dtl_explanation').text(data.book_explanation);
                        $('#book_dtl_img').attr('src', data.book_img);
                },
            })
            $('#viewModal').modal('show');
        });

        //Open new book inserting modal
        $(document).on('click','#addModalButton', function (e) {
            $('#addBookModal').modal('show');
        });

        //Open editing modal
        $(document).on('click','.editButton', function (e) {
            var elemId = $(this).data('id');
            $('#editBookModal').modal('show');
            $.ajax({
                type: 'GET',
                url: 'getdetailbook/' + elemId,
                success: function (data) {
                    $('input[name="book_title"]').val(data.book_title);
                    $('input[name="book_author"]').val(data.book_author);
                    $('input[name="book_explanation"]').val(data.book_explanation);
                    $('input[name="book_date"]').val(data.book_date);
                    $('input[name="book_img"]').val(data.book_img);
                    $('input[name="book_category"]').val(data.book_category);
                    $('input[name="book_stock"]').val(data.book_stock);
                },
            });
        });

        //View featured book modal
        $(document).on('click','#featuredBook', function (e) {
            //TODO : Null safety
            $('#viewModal').modal('show');
            $('#book_dtl_title').text('{{$featuredBook->book_title}}');
            $('#book_dtl_explanation').text('{{$featuredBook->book_explanation}}');
            $('#book_dtl_img').attr("src", '{{$featuredBook->book_img}}');
        });

        //Delete clicked book from server
        $(document).on('click', '.deleteButton', function () {
            var id = $(this).data("id");
            $.ajax({
                type: 'get',
                url: '/deletebook/' + id,
                success: function () {
                    $('#booklist').load(document.URL + ' #booklist');
                    $('#latest_book').load(document.URL + ' #latest_book');
                }
            })
        });

        // Insert a new book to server
        $(document).on('submit', '#addBookForm',function (e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: 'addbook',
                data: formData,
                success: function (response,xhr,status) {
                    $('#booklist').load(document.URL + ' #booklist');
                    $('#latest_book').load(document.URL + ' #latest_book');
                    $('#addBookModal').modal('hide');
                    $('#alerts').empty().show().html('').delay(3000).fadeOut(500);
                    $('#alerts').append('<div class="alert alert-success">'+ "Book added successfully!" +'</div>');
                    window.scrollTo(0, document.body.scrollHeight);
                },
                error: function (xhr, status, error) {
                    $('#validation-errors').empty().show().html('').delay(3000).fadeOut(500);
                    $.each(xhr.responseJSON.errors, function (key, value) {
                        $('#validation-errors').append('<div class="alert alert-danger">' + value + '</div>');
                    });
                }
            });
        });
    $document().on('submit', '#editBookForm',function (e){
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type:'POST',
            url: 'editbook',
            data: formdata,
            success: function (response,xhr,status){
                $('#booklist').load(document.URL + ' #booklist');
                $('#latest_book').load(document.URL + ' #latest_book');
                $('#addBookModal').modal('hide');
                $('#alerts').empty().show().html('').delay(3000).fadeOut(500);
                $('#alerts').append('<div class="alert alert-success">'+ "Book added successfully!" +'</div>');
                window.scrollTo(0, document.body.scrollHeight);
            }
        })
    })
    </script>
@endsection
